<?php


namespace alexdemers\OneSpanSign\Models;

/**
 * Class Field
 * @package TagMyDoc\OneSpan\Models
 */
class Validation extends Model
{
    /** @var ?string  */
    protected $errorMessage = '';

    /** @var ?int  */
    protected $errorCode = null;

    /** @var ?string  */
    protected $group = '';

    /** @var ?string */
    protected $pattern = '';

    /** @var ?bool */
    protected $disabled = false;

    /** @var bool */
    protected $required = false;

    /** @var ?int */
    protected $minLength = null;

    /** @var ?int */
    protected $maxLength = null;

    protected $enum = null;

    /** @var ?string */
    protected $groupTooltip = '';

    /** @var ?int */
    protected $minimumRequired = null;

    /** @var ?int */
    protected $maximumRequired = null;

    /**
     * @return bool|null
     */
    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

    /**
     * @param bool|null $disabled
     * @return Validation
     */
    public function withDisabled(?bool $disabled): Validation
    {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * @return null
     */
    public function getEnum()
    {
        return $this->enum;
    }

    /**
     * @param null $enum
     * @return Validation
     */
    public function withEnum($enum)
    {
        $this->enum = $enum;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    /**
     * @param int|null $errorCode
     * @return Validation
     */
    public function withErrorCode(?int $errorCode): Validation
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param string|null $errorMessage
     * @return Validation
     */
    public function withErrorMessage(?string $errorMessage): Validation
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGroup(): ?string
    {
        return $this->group;
    }

    /**
     * @param string|null $group
     * @return Validation
     */
    public function withGroup(?string $group): Validation
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGroupTooltip(): ?string
    {
        return $this->groupTooltip;
    }

    /**
     * @param string|null $groupTooltip
     * @return Validation
     */
    public function withGroupTooltip(?string $groupTooltip): Validation
    {
        $this->groupTooltip = $groupTooltip;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaximumRequired(): ?int
    {
        return $this->maximumRequired;
    }

    /**
     * @param int|null $maximumRequired
     * @return Validation
     */
    public function withMaximumRequired(?int $maximumRequired): Validation
    {
        $this->maximumRequired = $maximumRequired;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }

    /**
     * @param int|null $maxLength
     * @return Validation
     */
    public function withMaxLength(?int $maxLength): Validation
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinimumRequired(): ?int
    {
        return $this->minimumRequired;
    }

    /**
     * @param int|null $minimumRequired
     * @return Validation
     */
    public function withMinimumRequired(?int $minimumRequired): Validation
    {
        $this->minimumRequired = $minimumRequired;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinLength(): ?int
    {
        return $this->minLength;
    }

    /**
     * @param int|null $minLength
     * @return Validation
     */
    public function withMinLength(?int $minLength): Validation
    {
        $this->minLength = $minLength;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    /**
     * @param string|null $pattern
     * @return Validation
     */
    public function withPattern(?string $pattern): Validation
    {
        $this->pattern = $pattern;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->required;
    }

    /**
     * @param bool $required
     * @return Validation
     */
    public function withRequired(bool $required): Validation
    {
        $this->required = $required;
        return $this;
    }
    
    

}
