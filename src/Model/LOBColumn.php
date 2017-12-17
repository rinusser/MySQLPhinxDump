<?php
declare(strict_types=1);
/**
 * Requires PHP version 7.1+
 * @author Richard Nusser
 * @copyright 2017 Richard Nusser
 * @license GPLv3 (see http://www.gnu.org/licenses/)
 * @link https://github.com/rinusser/PhinxDump
 */

namespace RN\PhinxDump\Model;

/**
 * Model for blob/clob columns (TINYTEXT, LONGBLOB etc.)
 */
class LOBColumn extends AbstractColumn
{
  public const TYPE_TEXT='text';
  public const TYPE_BLOB='blob';

  public const SIZE_TINY='tiny';
  public const SIZE_REGULAR='regular';
  public const SIZE_MEDIUM='medium';
  public const SIZE_LONG='long';


  protected $_type;
  protected $_size;


  /**
   * Model constructor
   *
   * @param string      $name     see parent
   * @param string|NULL $default  see parent
   * @param bool        $nullable see parent
   * @param string      $type     one of this class's TYPE_* constants indicating whether this column contains BLOB or CLOB (=TEXT in MySQL) data
   * @param string      $size     one of this class's SIZE_* constants indicating the storage size
   */
  public function __construct(string $name, ?string $default, bool $nullable, string $type, string $size)
  {
    parent::__construct($name,$default,$nullable);
    $this->_type=$type;
    $this->_size=$size;
  }
}
