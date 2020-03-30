<?php
namespace Snowboard\SnowboardStaff\Controller;

/***
 *
 * This file is part of the "Snowboardlehrer" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * SnowboardTeacherController
 */
class SnowboardTeacherController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * snowboardTeacherRepository
     *
     * @var \Snowboard\SnowboardStaff\Domain\Repository\SnowboardTeacherRepository
     * @inject
     */
    protected $snowboardTeacherRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $snowboardTeachers = $this->snowboardTeacherRepository->findAll();
        $this->view->assign('snowboardTeachers', $snowboardTeachers);
    }

    /**
     * action show
     *
     * @param \Snowboard\SnowboardStaff\Domain\Model\SnowboardTeacher $snowboardTeacher
     * @return void
     */
    public function showAction(\Snowboard\SnowboardStaff\Domain\Model\SnowboardTeacher $snowboardTeacher)
    {
        $this->view->assign('snowboardTeacher', $snowboardTeacher);
    }
}
