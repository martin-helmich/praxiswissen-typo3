<?php
namespace Snowboard\SnowboardStaff\Domain\Repository;

use \TYPO3\CMS\Extbase\Persistence\Repository;

class SnowboardTeacherRepository extends Repository
{
    public function findAll()
    {
        $query = $this->createQuery();
        $constraint = $query->logicalNot(
          $query->equals('lastName', 'Mustermann')
        );
        $query->matching($constraint);
        return $query->execute();
    }
}
