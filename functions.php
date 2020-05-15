<?php

function inputElement(string $type, string $name, string $placeholder,string $class="form-control"){

$element = ' <div class="form-group">
                        <input type="'.$type.'" class="'.$class.'" name="'.$name.'" placeholder="'.$placeholder.'">
                    </div>';

                    echo $element;

}







?>