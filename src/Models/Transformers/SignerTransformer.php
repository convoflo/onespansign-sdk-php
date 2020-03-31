<?php


namespace alexdemers\OneSpanSign\Models\Transformers;


use Karriere\JsonDecoder\ClassBindings;
use Karriere\JsonDecoder\Transformer;
use alexdemers\OneSpanSign\Models\Signer;

/**
 * Class SignerTransformer
 * @package TagMyDoc\OneSpan\Models\Transformers
 */
class SignerTransformer implements Transformer
{

	/**
	 * register field, array, alias and callback bindings.
	 *
	 * @param ClassBindings $classBindings
	 */
	public function register(ClassBindings $classBindings)
	{
	}

	/**
	 * @return string the full qualified class name that the transformer transforms
	 */
	public function transforms()
	{
		return Signer::class;
	}
}
