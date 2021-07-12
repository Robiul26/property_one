<?php
namespace Modules\Template\Blocks;

use Modules\Template\Blocks\BaseBlock;
use Modules\Location\Models\Location;
use Modules\Property\Models\Property;
use Modules\Core\Models\Attributes;
use Modules\Core\Models\Terms;
use Modules\Media\Helpers\FileHelper;
use Modules\Property\Models\PropertyCategory;

class FormSearchAllService extends BaseBlock
{
    function __construct()
    {
        $list_attr = [];
        $list_attr_select = [];
        $list_attribute = Attributes::where("service", 'property')
            ->orderBy('created_at', 'desc')
            ->get();
        foreach ($list_attribute as $key => $service) {
            $list_service[] = ['value'   => $service['id'],
                               'name' => ucwords($service['name'])
            ];
        }
        $arg[] = [
            'id'            => 'attr_hide',
            'type'          => 'checklist',
            'listBox'          => 'true',
            'label'         => "<strong>".__('Show Attribute')."</strong>",
            'values'        => $list_service,
        ];
        $arg[] = [
            'id'        => 'title',
            'type'      => 'input',
            'inputType' => 'text',
            'label'     => __('Title')
        ];
        $arg[] = [
            'id'        => 'sub_title',
            'type'      => 'input',
            'inputType' => 'text',
            'label'     => __('Sub Title')
        ];

        $arg[] =  [
            'id'            => 'style',
            'type'          => 'radios',
            'label'         => __('Style Background'),
            'values'        => [
                [
                    'value'   => '',
                    'name' => __("Style 1")
                ],
                [
                    'value'   => 'style_2',
                    'name' => __("Style 2 - Slider Carousel")
                ]
            ]
        ];
        $arg[] = [
            'id'    => 'bg_image',
            'type'  => 'uploader',
            'label' => __('- Style 1: Background Image Uploader')
        ];

        $arg[] = [
            'id'          => 'list_slider',
            'type'        => 'listItem',
            'label'       => __('- Style Slider: List Item(s)'),
            'title_field' => 'title',
            'settings'    => [
                [
                    'id'    => 'bg_image',
                    'type'  => 'uploader',
                    'label' => __('Background Image Uploader')
                ]
            ]
        ];

        $arg[] = [
            'type'=> "checkbox",
            'label'=>__("Hide form search service?"),
            'id'=> "hide_form_search",
            'default'=>false
        ];
        $this->setOptions([
            'settings' => $arg
        ]);
    }

    public function getName()
    {
        return __('Form Search All Service');
    }

    public function content($model = [])
    {
        if (empty($model['style'])) {
            $model['style'] = 'style_1';
        }
        $showAttrId = isset($model['attr_show']) ? $model['attr_show'] : false;
        $model['attr_show'] = [];
        if(!empty($showAttrId)) {
            $model['attr_show'] = Attributes::with('terms')->find($showAttrId);
        }
        $hideAttrId = isset($model['attr_hide']) ? $model['attr_hide'] : [];
        $model['attr_hide'] = [];
        if(!empty($hideAttrId)) {
            $model['attr_hide'] = Attributes::with('terms')->whereIn("id", $hideAttrId)->get();
        }

        $model['bg_image_url'] = FileHelper::url($model['bg_image'], 'full') ?? "";
        $model['modelBlock'] = $model;
        $model['property_min_max_price'] = Property::getMinMaxPrice();

        $limit_location = 15;
        $model['list_location'] = Location::where('status', 'publish')->limit($limit_location)->with(['translations'])->get()->toTree();
        $model['list_category'] = PropertyCategory::where('status', 'publish')->get()->toTree();

        $model['list_slider'] = $model['list_slider'] ?? "";

        return view('Template::frontend.blocks.form-search-all-service.'.$model['style'], $model);
    }
}
