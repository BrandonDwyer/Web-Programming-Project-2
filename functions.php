<?php
function is_serialized($string)
{
    $data = @unserialize($string);
    if ($data !== false) {
        return true;
    } else {
        return false;
    }
}
function maybe_serialize($data)
{
    if (is_array($data) || is_object($data)) {
        return serialize($data);
    }

    /*
     * Double serialization is required for backward compatibility.
     * See https://core.trac.wordpress.org/ticket/12930
     * Also the world will end. See WP 3.6.1.
     */
    if (is_serialized($data, false)) {
        return serialize($data);
    }

    return $data;
}
function maybe_unserialize($data)
{
    if (is_serialized($data)) { // Don't attempt to unserialize data that wasn't serialized going in.
        return @unserialize(trim($data));
    }
    return $data;
}
if (isset($_GET['clear-point'])) {
    $_SESSION['array_ans'] = '';
}
function get_single_point()
{
$questionPoint = 0;
    if (isset($_SESSION['array_ans'])) {
        $dataAns = $_SESSION['array_ans'];
        $dataAnsArr = maybe_unserialize($dataAns);
        if (is_array($dataAnsArr)) {
            foreach ($dataAnsArr as $k => $item) {
                if (isset($item['point'])) {
                    $questionPoint = (float) $item['point'];
                }
            }
        }
    }

    return $questionPoint;


}
function get_total_point()
{
    $total = 0;
    if (isset($_SESSION['array_ans'])) {
        $dataAns = $_SESSION['array_ans'];
        $dataAnsArr = maybe_unserialize($dataAns);
        if (is_array($dataAnsArr)) {
            foreach ($dataAnsArr as $k => $item) {
                if (isset($item['point'])) {
                    $total += (float) $item['point'];
                }
            }
        }
    }

    return $total;
}
