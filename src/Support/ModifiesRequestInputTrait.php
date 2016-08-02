<?php
namespace FewAgency\Reformulator\Support;

trait ModifiesRequestInputTrait
{
    /* Replaces a single item in a given Request’s input using dot-notation (to be used by Middleware or FormRequest) */
    protected function setRequestInput(Request $request, $key, $value)
    {
        /*
         When setting input values in a Request using dot-notation, always pull out the full array of the first dot-keyed-part, then Arr::set() using the rest of the dot-keyed-parts on that sub-array and merge that array back in using Request::merge() on the first dot-keyed-part.

        Request::offsetGet() gets from all input data + files using dot-notation - don’t use this!
        Request::input() gets from all input data using dot-notation - use this!
        …but they both can only find a full string key OR dot notated key
        Request::merge() adds/overwrites an array of values to the input
        */
        //TODO: implement setRequestInput()
    }
}