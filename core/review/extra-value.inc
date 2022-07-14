<?php


/**
 * get_extra_value()
 *
 * This makes it a little easier to get values defined in an
 * extras array (or not, if no array exists). You'd use it in a
 * template tag function as follows:
 * `$image_col_classes = get_extra_value('image_col_classes');`
 *
 * You can then include $image_col_classes in the template markup, even
 * if you have no idea whether it will ever contain anything. If it ever
 * has a value, that value will be added; if not, it'll be blank.
 *
 * You can also, optionally, wrap an extras tag in text. This is useful
 * for use cases like inline CSS. If an element might or might not have
 * inline CSS, you wouldn't want to have 'style="$the_css"' in your template
 * markup, since a lot of the time, it might just be empty. Better to do the
 * following: just include $the_css in the template markup, and then, in the
 * template function, call get_extra_value() as:
 *
 * `get_extra_value('the_css', $extras, 'style="%s"');`
 *
 * That way, the 'style=' part is only added if there actually is styling.
 *
 *
 * @param  string  $extras_key - the key for the extra value in question
 * @param  array  $extras_array - the full array of all extra parameters
 * @param  string $format - an optional format (like 'style="[value here]"') to wrap the value in
 * @return string - the formatted extra
 */
function get_extras_value($extras_key, $extras_array, $format = false) {
    if ($extras_array && array_key_exists($extras_key, $extras_array)) {
        // return $extras_array[ $extras_key ];
        if(!$format) $format = $extras_array[ $extras_key ];

        return sprintf($format, $extras_array[ $extras_key ]);

    }
    else return false;
}