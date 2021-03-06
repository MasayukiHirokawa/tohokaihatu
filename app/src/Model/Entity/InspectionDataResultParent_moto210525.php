<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InspectionDataResultParent Entity
 *
 * @property int $id
 * @property int $inspection_standard_size_parent_id
 * @property int $product_conditon_parent_id
 * @property \Cake\I18n\FrozenTime $datetime
 * @property int $staff_id
 * @property int $delete_flag
 * @property \Cake\I18n\FrozenTime $created_at
 * @property int $created_staff
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property int|null $updated_staff
 *
 * @property \App\Model\Entity\InspectionStandardSizeParent $inspection_standard_size_parent
 * @property \App\Model\Entity\ProductConditonParent $product_conditon_parent
 * @property \App\Model\Entity\Staff $staff
 * @property \App\Model\Entity\InspectionDataResultChild[] $inspection_data_result_children
 */
class InspectionDataResultParent extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'inspection_standard_size_parent_id' => true,
        'product_conditon_parent_id' => true,
        'datetime' => true,
        'staff_id' => true,
        'delete_flag' => true,
        'created_at' => true,
        'created_staff' => true,
        'updated_at' => true,
        'updated_staff' => true,
        'inspection_standard_size_parent' => true,
        'product_conditon_parent' => true,
        'staff' => true,
        'inspection_data_result_children' => true
    ];
}
