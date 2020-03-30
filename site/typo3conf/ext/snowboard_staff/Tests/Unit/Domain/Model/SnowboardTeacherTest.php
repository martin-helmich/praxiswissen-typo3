<?php
namespace Snowboard\SnowboardStaff\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SnowboardTeacherTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Snowboard\SnowboardStaff\Domain\Model\SnowboardTeacher
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Snowboard\SnowboardStaff\Domain\Model\SnowboardTeacher();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getFirstNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstName()
        );
    }

    /**
     * @test
     */
    public function setFirstNameForStringSetsFirstName()
    {
        $this->subject->setFirstName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLastNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastName()
        );
    }

    /**
     * @test
     */
    public function setLastNameForStringSetsLastName()
    {
        $this->subject->setLastName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPictureReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getPicture()
        );
    }

    /**
     * @test
     */
    public function setPictureForFileReferenceSetsPicture()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPicture($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'picture',
            $this->subject
        );
    }
}
