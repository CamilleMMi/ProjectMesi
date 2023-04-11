<?php

namespace Repositories;

// Parent class
use DB\CortexCollection;

class Repository extends \Prefab{

    /**
     * @param ...$args
     * @return \Models\Model
     */
    public function load(...$args): \Models\Model {
        $model = new $this->modelClass();
        $model->load(...$args);
        return $model;
    }

    /**
     * @param ...$args
     * @return CortexCollection
     */
    public function find(...$args) {
        $model = new $this->modelClass();
        return $model->find(...$args);
    }

    /**
     * @param int $id
     * @return \Models\Model
     */
    public function getById(int $id): \Models\Model {
        $model = new $this->modelClass();
        $model->load(['_id = ?', $id]);
        return $model;
    }

    /**
     * @param array $params
     * @return \Models\Model
     */
    public function add(array $params): \Models\Model {
        $model = new $this->modelClass();
        $model->copyfrom($params, function ($val) use ($model) {
            return array_intersect_key($val, $model->getFieldList());
        });
        $model->save();
        return $model;
    }

    /**
     * @param int $id
     * @param array $params
     * @return \Models\Model
     */
    public function edit(int $id, array $params): \Models\Model {
        $model = new $this->modelClass();
        $model->load(array('_id = ?', $id));
        $model->copyfrom($params, function ($val) use ($model) {
            return array_intersect_key($val, $model->getFieldList());
        });
        $model->save();
        return $model;
    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void {
        $model = new $this->modelClass();
        $model->load(array('id=?', $id));
        $model->erase();
    }

    /**
     * @param ...$args
     * @return void
     */
    public function exec(...$args) {
        $model = new $this->modelClass();
        $model->db->exec(...$args);
    }
}
