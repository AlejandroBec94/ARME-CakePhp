<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Helpdesk Entity
 *
 * @property int $id
 * @property string $QuestionID
 * @property string $QuestionName
 * @property string|null $QuestionDescription
 * @property int $QuestionRate
 * @property string $QuestionCategory
 * @property string|null $QuestionTags
 * @property \Cake\I18n\FrozenTime|null $DocDate
 * @property \Cake\I18n\FrozenTime|null $LastUpdate
 * @property int|null $UserCreate
 */
class Helpdesk extends Entity
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
        'QuestionID' => true,
        'QuestionName' => true,
        'QuestionDescription' => true,
        'QuestionRate' => true,
        'QuestionCategory' => true,
        'QuestionTags' => true,
        'DocDate' => true,
        'LastUpdate' => true,
        'UserCreate' => true
    ];
}
