<?php

declare(strict_types=1);

namespace PTB\PacketaApi\Label;

use PTB\PacketaApi\Common\RequestInterface;

readonly class GetPacketCourierLabelPdfRequest implements RequestInterface
{
	private const string METHOD = 'packetCourierLabelPdf';

	public function __construct(
		protected int $packetId,
		protected string $courierNumber,
	) {
	}

	public function getMethod(): string
	{
		return self::METHOD;
	}

	public function jsonSerialize(): array
	{
		return [
			'packetId' => $this->packetId,
			'courierNumber' => $this->courierNumber,
		];
	}
}
