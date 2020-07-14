<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Publisher Entity
 *
 * @property int $id
 * @property int|null $book_id
 * @property string|null $pub_name
 * @property string|null $city
 * @property string|null $state
 * @property string|null $country
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Book $book
 */
class Publisher extends Entity
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
        'book_id' => true,
        'pub_name' => true,
        'city' => true,
        'state' => true,
        'country' => true,
        'created' => true,
        'modified' => true,
        'book' => true,
    ];
}
