<?php


namespace alexdemers\OneSpanSign\Models;

/**
 * Class Field
 * @package TagMyDoc\OneSpan\Models
 */
class Field extends Model
{
	/** @var string */
	protected $type = 'SIGNATURE';

	/** @var string */
	protected $id = '';

	/** @var int */
	protected $page = 1;

	/** @var float */
	protected $top = 0.0;

	/** @var float */
	protected $left = 0.0;

	/** @var float */
	protected $width = 0.0;

	/** @var float */
	protected $height = 0.0;

	/**
	 * @param string $type
	 * @return Field
	 */
	public static function createFromType(string $type): self
	{
		return (new self())->withType($type);
	}

	/**
	 * @return string
	 */
	public function getType(): string
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 * @return Field
	 */
	public function withType(string $type): Field
	{
		$this->type = $type;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getPage(): int
	{
		return $this->page;
	}

	/**
	 * @param int $page
	 * @return Field
	 */
	public function withPage(int $page): Field
	{
		$this->page = $page;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getId(): string
	{
		return $this->id;
	}

	/**
	 * @param string $id
	 * @return Field
	 */
	public function withId(string $id): Field
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getTop(): float
	{
		return $this->top;
	}

	/**
	 * @param float $top
	 * @return Field
	 */
	public function withTop(float $top): Field
	{
		$this->top = $top;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getLeft(): float
	{
		return $this->left;
	}

	/**
	 * @param float $left
	 * @return Field
	 */
	public function withLeft(float $left): Field
	{
		$this->left = $left;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getWidth(): float
	{
		return $this->width;
	}

	/**
	 * @param float $width
	 * @return Field
	 */
	public function withWidth(float $width): Field
	{
		$this->width = $width;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getHeight(): float
	{
		return $this->height;
	}

	/**
	 * @param float $height
	 * @return Field
	 */
	public function withHeight(float $height): Field
	{
		$this->height = $height;
		return $this;
	}

}
