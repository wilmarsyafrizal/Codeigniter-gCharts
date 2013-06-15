<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Data Table Object
 *
 * Holds all the data for charts
 *
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Apache License, Version 2.0
 * which is included in the LICENSE file
 *
 *
 * @author Kevin Hill <kevinkhill@gmail.com>
 * @copyright (c) 2013, Kevin Hill
 * @link https://github.com/kevinkhill/Codeigniter-gCharts Github Page
 * @license http://http://www.apache.org/licenses/LICENSE-2.0.html Apache-V2
 *
 */

class DataTable
{
    var $cols = array();
    var $rows = array();

    public function __construct() { }

    /**
     * Adds a column to the DataTable
     *
     * First signature has the following parameters:
     * type - A string with the data type of the values of the column.
     * The type can be one of the following: 'string' 'number' 'boolean' 'date'
     * 'datetime' 'timeofday'.
     * opt_label - [Optional] A string with the label of the column. The column
     * label is typically displayed as part of the visualization, for example as
     *  a column header in a table, or as a legend label in a pie chart. If not
     * value is specified, an empty string is assigned.
     * opt_id - [Optional] A string with a unique identifier for the column. If
     * not value is specified, an empty string is assigned.
     *
     * 
     * Second signature has a single array parameter with the following members:
     *
     * type - A string describing the column data type. Same values as type above.
     * label - [Optional, string] A label for the column.
     * id - [Optional, string] An ID for the column.
     * role - [Optional, string] A role for the column.
     * pattern - [Optional, string] A number (or date) format string specifying how to display the column value.
     *
     * @param type $typeOrDescriptionArray
     * @param type $opt_label
     * @param type $opt_id
     * @return \DataTable
     * @throws Exception
     */
    public function addColumn($typeOrDescriptionArray, $opt_label = '', $opt_id = '')
    {
        $types = array(
            'string',
            'number',
            'boolean',
            'date',
            'datetime',
            'timeofday'
        );

        $descriptions = array(
            'type',
            'label',
            'id',
            'role',
            'pattern'
        );

        switch(gettype($typeOrDescriptionArray))
        {
            case 'array':
                foreach($typeOrDescriptionArray as $key => $value)
                {
                    if(array_key_exists('type', $typeOrDescriptionArray))
                    {
                        if(in_array($typeOrDescriptionArray['type'], $types))
                        {
                            $descArray['type'] = $typeOrDescriptionArray['type'];

                            if(in_array($key, $descriptions))
                            {
                                if($key != 'type')
                                {
                                    if(is_string($value))
                                    {
                                        $descArray[$key] = $value;
                                    } else {
                                        throw new Exception('Invalid description array value, must be type (string).');
                                    }
                                }
                            } else {
                                throw new Exception('Invalid description array key value, must be type (string) with any key value '.$this->_array_string($descriptions));
                            }
                        } else {
                            throw new Exception('Invalid type, must be type (string) with the value '.$this->_array_string($types));
                        }
                    } else {
                        throw new Exception('Invalid description array, must contain (array) with at least one key type (string) value [ type ]');
                    }
                }

                $this->cols[] = $descArray;
            break;

            case 'string':
                if(in_array($typeOrDescriptionArray, $types))
                {
                    $descArray['type'] = $typeOrDescriptionArray;

                    if(is_string($opt_label))
                    {
                        $descArray['opt_label'] = $opt_label;
                    } else {
                        throw new Exception('Invalid opt_label, must be type (string).');
                    }

                    if(is_string($opt_id))
                    {
                        $descArray['opt_id'] = $opt_id;
                    } else {
                        throw new Exception('Invalid opt_id, must be type (string).');
                    }
                } else {
                    throw new Exception('Invalid type, must be type (string) with the value '.$this->_array_string($types));
                }

                $this->cols[] = $descArray;
            break;

            default:
                throw new Exception('Invalid type or description array, must be type (string) or (array).');
            break;
        }

        return $this;
    }

//    public function addColumn($description_object)
//    {
//
//    }

    public function addRow($opt_cellArray)
    {

    }

    public function addRows($numOrArray)
    {

    }

//    public function clone()
//    {
//
//    }

    public function getColumnId($columnIndex)
    {

    }

    public function getColumnLabel($columnIndex)
    {

    }

    public function getColumnPattern($columnIndex)
    {

    }

    public function getColumnProperty($columnIndex, $name)
    {

    }

    public function getColumnRange($columnIndex)
    {

    }

    public function getColumnRole($columnIndex)
    {

    }

    public function getColumnType($columnIndex)
    {

    }

    public function getDistinctValues($columnIndex)
    {

    }

    public function getFilteredRows($filters)
    {

    }

    public function getFormattedValue($rowIndex, $columnIndex)
    {

    }

    public function getNumberOfColumns()
    {

    }

    public function getNumberOfRows()
    {

    }

    public function getProperties($rowIndex, $columnIndex)
    {

    }

    public function getProperty($rowIndex, $columnIndex, $name)
    {

    }

    public function getRowProperties($rowIndex)
    {

    }

    public function getRowProperty($rowIndex, $name)
    {

    }

    public function getSortedRows($sortColumns)
    {

    }

    public function getTableProperties()
    {

    }

    public function getTableProperty($name)
    {

    }

    public function getValue($rowIndex, $columnIndex)
    {

    }

    public function insertColumn($columnIndex, $type, $label='', $id='')
    {

    }

    public function insertRows($rowIndex, $numberOrArray)
    {

    }

    public function removeColumn($columnIndex)
    {

    }

    public function removeColumns($columnIndex, $numberOfColumns)
    {

    }

    public function removeRow($rowIndex)
    {

    }

    public function removeRows($rowIndex, $numberOfRows)
    {

    }

    public function setCell($rowIndex, $columnIndex, $value='', $formattedValue='', $properties='')
    {

    }

    public function setColumnLabel($columnIndex, $label)
    {

    }

    public function setColumnProperty($columnIndex, $name, $value)
    {

    }

    public function setColumnProperties($columnIndex, $properties)
    {

    }

    public function setFormattedValue($rowIndex, $columnIndex, $formattedValue)
    {

    }

    public function setProperty($rowIndex, $columnIndex, $name, $value)
    {

    }

    public function setProperties($rowIndex, $columnIndex, $properties)
    {

    }

    public function setRowProperty($rowIndex, $name, $value)
    {

    }

    public function setRowProperties($rowIndex, $properties)
    {

    }

    public function setTableProperty($name, $value)
    {

    }

    public function setTableProperties($properties)
    {

    }

    public function setValue($rowIndex, $columnIndex, $value)
    {

    }

    public function sort($sortColumns)
    {

    }

    public function toJSON()
    {

        return json_encode($this);




//        {
//       cols: [{id: 'task', label: 'Task', type: 'string'},
//                {id: 'hours', label: 'Hours per Day', type: 'number'}],
//       rows: [{c:[{v: 'Work'}, {v: 11}]},
//              {c:[{v: 'Eat'}, {v: 2}]},
//              {c:[{v: 'Commute'}, {v: 2}]},
//              {c:[{v: 'Watch TV'}, {v:2}]},
//              {c:[{v: 'Sleep'}, {v:7, f:'7.000'}]}
//             ]
//     },
//   0.6

    }

    /**
     * Converts array to string
     *
     * Takes an array of values and ouputs them as a string between
     * brackets and separated by a pipe.
     *
     * @param array $defaultValues
     * @return string contains array values in readable form
     */
    public function _array_string($defaultValues)
    {
        $tmp = '[ ';

        foreach($defaultValues as $k => $v)
        {
            $tmp .= $v . ' | ';
        }

        return substr_replace($tmp, "", -2) . ']';
    }
}

/* End of file DataTable.php */
/* Location: ./application/libraries/gcharts/DataTable.php */