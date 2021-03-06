<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 SARUULBAT Amarsaikhan <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Object extends D\Model\Object {

    /**
     * Buh object iih avah
     *
     * @return object Objects iig butsaana
     */
    public static function fetchAll() {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $objects = $mapper_db->fetchAll();

        return $objects;
    }

    /**
     * Ugugdsun module iin object uudiig avah
     *
     * @param string $module Module iin ner
     */
    public static function fetchByModule($module = '') {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $objects = $mapper_db->select(array(
            'module' => $module . '%'
//            'module' => "'" . $module . "%'"
                ), "code LIKE :module");

        return $objects;
    }

    /**
     * id aar n object iig avah
     *
     * @param integer $id object iin id
     *
     * @return object Object iig butsaana
     */
    public static function getById($id) {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $object = $mapper_db->fetchById($id);

        return $object;
    }

    /**
     * ugugdsun object id aar category uudiig avah
     *
     * @param integer $object_id Object iin id
     * @return object Category object iig butsaana
     */
    public static function getCategories($object_id) {

        global $db;

        $oc = new \D\Mapper\ObjectCategoryMapper($db, new \D\Model\Collection\EntityCollection);
        $mapper_db = db_mapper($db, 'Category');
        $categories = $mapper_db->select(array(
            'object_id' => $object_id
                ), ' id IN (SELECT category_id FROM ' . $oc->getTableName() . ' WHERE object_id=:object_id)');

        return $categories;
    }

    /**
     * ugugdsun object id bolon category id aar avah
     *
     * @param integer $object_id Object iin id
     * @param string $module Yamar module iin object iig avah eseh
     * @return object Category object iig butsaana
     */
    public static function getByCategoryAndModule($category_id = 0, $module = 'any', $options = array()) {

        global $db;

        if (isset($options['order_by'])) {
            $order_by = "ORDER BY " . $options['order_by'];
        } else {
            $order_by = '';
        }
        $oc = new \D\Mapper\ObjectCategoryMapper($db, new \D\Model\Collection\EntityCollection);
        $mapper_db = db_mapper($db, 'Object');

        if ($category_id == 0 && $module != 'any') {
            $objects = $mapper_db->select(array(
                'module' => $module
                    ), ' module_name=:module ' . $order_by);
        } else if ($category_id != 0 && $module == 'any') {
            $objects = $mapper_db->select(array(
                'category_id' => $category_id
                    ), ' id IN (SELECT object_id FROM ' . $oc->getTableName() . ' WHERE category_id=:category_id) ' . $order_by);
        } else if ($category_id == 0 && $module == 'any') {
            $objects = $mapper_db->select(array(), ' id!=0 ' . $order_by);
        } else {
            $objects = $mapper_db->select(array(
                'category_id' => $category_id,
                'module' => $module
                    ), ' module_name=:module AND id IN (SELECT object_id FROM ' . $oc->getTableName() . ' WHERE category_id=:category_id) ' . $order_by);
        }

        return $objects;
    }

    /**
     * ugugdsun object id bolon category id gaar featured iig avah
     *
     * @param integer $object_id Object iin id
     * @param string $module Yamar module iin object iig avah eseh
     * @return object Category object iig butsaana
     */
    public static function getFeatured($category_id = 0, $module = 'any', $options = array()) {

        global $db;

        if (isset($options['order_by'])) {
            $order_by = "ORDER BY " . $options['order_by'];
        } else {
            $order_by = '';
        }
        $oc = new \D\Mapper\ObjectCategoryMapper($db, new \D\Model\Collection\EntityCollection);
        $mapper_db = db_mapper($db, 'Object');

        if ($category_id == 0) {
            $objects = $mapper_db->select(array(
                'module' => $module
                    ), ' module_name=:module AND is_featured=1 ' . $order_by);
        } else if ($module == 'any') {
            $objects = $mapper_db->select(array(
                'category_id' => $category_id
                    ), ' is_featured=1 AND id IN (SELECT object_id FROM ' . $oc->getTableName() . ' WHERE category_id=:category_id) ' . $order_by);
        } else {
            $objects = $mapper_db->select(array(
                'category_id' => $category_id,
                'module' => $module
                    ), ' module_name=:module AND is_featured=1 AND id IN (SELECT object_id FROM ' . $oc->getTableName() . ' WHERE category_id=:category_id) ' . $order_by);
        }

        return $objects;
    }

}
