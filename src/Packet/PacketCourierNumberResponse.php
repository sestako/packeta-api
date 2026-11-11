<?php

declare(strict_types=1);

namespace PTB\PacketaApi\Packet;

use PTB\PacketaApi\Common\ResponseInterface;
use PTB\PacketaApi\Exception\PacketaException;

readonly class PacketCourierNumberResponse implements ResponseInterface
{
	public function __construct(
		private string $courierNumber,
	) {
	}

	public static function fromArrayResponse(array $data): PacketCourierNumberResponse
	{
		if (isset($data['courierNumber']) === false || is_string($data['courierNumber']) === false) {
			throw new PacketaException('PacketaApi Error: Required "courierNumber" is missing in response.');
		}

		return new self($data['courierNumber']);
	}

	public function getCourierNumber(): string
	{
		return $this->courierNumber;
	}
}
