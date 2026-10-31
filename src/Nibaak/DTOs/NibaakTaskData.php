<?php

namespace Rasadent\Common\Nibaak\DTOs;

use ArrayAccess;

class NibaakTaskData implements ArrayAccess
{
    public function __construct(
        public string $title,
        public string $customerName,
        public string $customerMobile,
        public ?string $followTypeCode = null,
        public ?string $externalId = null,
        public ?string $description = null,
        public ?string $wiki = null,
        public ?string $suggestion = null,
        public string $priority = 'high',
        public string $status = 'open',
        public string $feed = 'external-system',
        public ?string $dueDate = null,
    ) {
        $this->dueDate = $dueDate ?? date('Y-m-d H:i:s');
    }

    /**
     * Create an instance from array data for backward compatibility or serialization.
     */
    public static function fromArray(array $data): self
    {
        $customer = $data['customer'] ?? [];
        $customerName = $customer['name'] ?? $data['customer_name'] ?? '';
        $customerMobile = (string) ($customer['mobile'] ?? $data['customer_mobile'] ?? '');

        return new self(
            title: $data['title'] ?? '',
            customerName: $customerName,
            customerMobile: $customerMobile,
            followTypeCode: $data['follow_type_code'] ?? null,
            externalId: $data['external_id'] ?? null,
            description: $data['description'] ?? null,
            wiki: $data['wiki'] ?? null,
            suggestion: $data['suggestion'] ?? null,
            priority: $data['priority'] ?? 'high',
            status: $data['status'] ?? 'open',
            feed: $data['feed'] ?? 'external-system',
            dueDate: $data['due_date'] ?? $data['date'] ?? null,
        );
    }

    /**
     * Convert to array representation expected by Nibaak API.
     */
    public function toArray(): array
    {
        return [
            'follow_type_code' => $this->followTypeCode,
            'external_id' => $this->externalId,
            'title' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority,
            'customer' => [
                'name' => $this->customerName,
                'mobile' => (string) $this->customerMobile,
            ],
            'due_date' => $this->dueDate,
            'status' => $this->status,
            'wiki' => $this->wiki,
            'feed' => $this->feed,
            'suggestion' => $this->suggestion,
        ];
    }

    /*
     |--------------------------------------------------------------------------
     | ArrayAccess implementation for backward compatibility
     |--------------------------------------------------------------------------
     */

    public function offsetExists(mixed $offset): bool
    {
        return array_key_exists($offset, $this->toArray());
    }

    public function offsetGet(mixed $offset): mixed
    {
        $array = $this->toArray();
        return $array[$offset] ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        match ($offset) {
            'title' => $this->title = (string) $value,
            'follow_type_code' => $this->followTypeCode = $value,
            'external_id' => $this->externalId = $value,
            'description' => $this->description = $value,
            'priority' => $this->priority = (string) $value,
            'due_date' => $this->dueDate = (string) $value,
            'status' => $this->status = (string) $value,
            'wiki' => $this->wiki = $value,
            'feed' => $this->feed = (string) $value,
            'suggestion' => $this->suggestion = $value,
            'customer' => [
                $this->customerName = is_array($value) ? ($value['name'] ?? '') : '',
                $this->customerMobile = is_array($value) ? (string) ($value['mobile'] ?? '') : '',
            ],
            default => null,
        };
    }

    public function offsetUnset(mixed $offset): void
    {
        $this->offsetSet($offset, null);
    }
}
