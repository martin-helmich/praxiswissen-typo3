<?php
namespace Snowboard\SnowboardStaff\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Snowboard\SnowboardStaff\Domain\Model\SnowboardTeacher;

class SnowboardTeacherController extends ActionController
{

    /**
     * @var \Snowboard\SnowboardStaff\Domain\Repository\SnowboardTeacherRepository
     * @inject
     */
    protected $snowboardTeacherRepository = NULL;

    /**
     * @return void
     */
    public function listAction()
    {
        $snowboardTeachers = $this->snowboardTeacherRepository->findAll();
        $this->view->assign('snowboardTeachers', $snowboardTeachers);
    }

    /**
     * @param \Snowboard\SnowboardStaff\Domain\Model\SnowboardTeacher $snowboardTeacher
     * @return void
     */
    public function showAction(SnowboardTeacher $snowboardTeacher)
    {
        $this->view->assign('snowboardTeacher', $snowboardTeacher);
    }

}
