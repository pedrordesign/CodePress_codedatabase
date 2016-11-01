<?php

namespace CodePress\CodeDatabase\Contracts;

interface CriteriaCollection{

    public function addCriteria(CriteriaInterface $criteria);

    public function getCriteriaCollection();

    public function getByCriteria(CriteriaInterface $CriteriaInterface);

    public function applyCriteria();

    public function ignoreCriteria($isIgnored = true);

    public function clearCriteria();

}