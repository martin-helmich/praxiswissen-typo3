<?php
namespace Snowboard\SnowboardStaff\Domain\Repository;

use \TYPO3\CMS\Extbase\Persistence\Repository;

class SnowboardTeacherRepository extends Repository
{
    public function findAll()
    {
        $query = $this->createQuery();
        $query->setOrderings(['lastName' => 'ASC']);
        return $query->execute();
    }
}
