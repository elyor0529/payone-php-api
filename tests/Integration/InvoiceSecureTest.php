<?php

namespace ArvPayoneApi\Integration;

use ArvPayoneApi\Request\PaymentTypes;
use ArvPayoneApi\Response\GenericResponse;

/**
 * Class InvoiceSecureTest
 */
class InvoiceSecureTest extends IntegrationTestAbstract
{
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        self::$paymentMethod = PaymentTypes::PAYONE_INVOICE_SECURE;
    }

    /**
     * @depends testCapturing
     * @group online
     */
    public function testRefundAfterCapture(GenericResponse $capture)
    {
        $this->markTestSkipped('Will fail with "Desired status change not possible for this payment process" as Payone callbacks will not be processed.');
    }
}