<?php
use Repositories\UserRepository;

class DataController extends Controller {

    public function data_user(\Base $f3) {
        $this->json_echo(\Repositories\UserRepository::instance()->find(null, ["order"=>"id DESC"])->castAll());
    }
}
