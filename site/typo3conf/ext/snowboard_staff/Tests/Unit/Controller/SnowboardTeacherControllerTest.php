<?php
namespace Snowboard\SnowboardStaff\Tests\Unit\Controller;

/**
 * Test case.
 */
class SnowboardTeacherControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Snowboard\SnowboardStaff\Controller\SnowboardTeacherController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Snowboard\SnowboardStaff\Controller\SnowboardTeacherController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSnowboardTeachersFromRepositoryAndAssignsThemToView()
    {

        $allSnowboardTeachers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $snowboardTeacherRepository = $this->getMockBuilder(\Snowboard\SnowboardStaff\Domain\Repository\SnowboardTeacherRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $snowboardTeacherRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSnowboardTeachers));
        $this->inject($this->subject, 'snowboardTeacherRepository', $snowboardTeacherRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('snowboardTeachers', $allSnowboardTeachers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSnowboardTeacherToView()
    {
        $snowboardTeacher = new \Snowboard\SnowboardStaff\Domain\Model\SnowboardTeacher();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('snowboardTeacher', $snowboardTeacher);

        $this->subject->showAction($snowboardTeacher);
    }
}
