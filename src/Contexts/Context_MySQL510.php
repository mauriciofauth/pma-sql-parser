<?php

namespace SqlParser\Contexts;

use SqlParser\Context;

class Context_MySQL510 extends Context
{

    public static $KEYWORDS = array(

        'AS' => 1, 'BY' => 1, 'IF' => 1, 'IN' => 1, 'IS' => 1,
        'ON' => 1, 'OR' => 1, 'TO' => 1,
        'ADD' => 1, 'ALL' => 1, 'AND' => 1, 'ASC' => 1, 'DEC' => 1,
        'DIV' => 1, 'FOR' => 1, 'INT' => 1, 'KEY' => 1, 'MOD' => 1,
        'NOT' => 1, 'OUT' => 1, 'SET' => 1, 'SQL' => 1, 'SSL' => 1,
        'USE' => 1, 'XOR' => 1,
        'BLOB' => 1, 'BOTH' => 1, 'CALL' => 1, 'CASE' => 1,
        'CHAR' => 1, 'DESC' => 1, 'DROP' => 1, 'DUAL' => 1,
        'EACH' => 1, 'ELSE' => 1, 'EXIT' => 1, 'FROM' => 1,
        'INT1' => 1, 'INT2' => 1, 'INT3' => 1, 'INT4' => 1,
        'INT8' => 1, 'INTO' => 1, 'JOIN' => 1, 'KEYS' => 1,
        'KILL' => 1, 'LEFT' => 1, 'LIKE' => 1, 'LOAD' => 1,
        'LOCK' => 1, 'LONG' => 1, 'LOOP' => 1, 'NULL' => 1,
        'READ' => 1, 'REAL' => 1, 'SHOW' => 1, 'THEN' => 1,
        'TRUE' => 1, 'UNDO' => 1, 'WHEN' => 1, 'WITH' => 1,
        'ALTER' => 1, 'CHECK' => 1, 'CROSS' => 1, 'FALSE' => 1,
        'FETCH' => 1, 'FLOAT' => 1, 'FORCE' => 1, 'GRANT' => 1,
        'GROUP' => 1, 'INDEX' => 1, 'INNER' => 1, 'INOUT' => 1,
        'LEAVE' => 1, 'LIMIT' => 1, 'LINES' => 1, 'MATCH' => 1,
        'ORDER' => 1, 'OUTER' => 1, 'PURGE' => 1, 'RANGE' => 1,
        'READS' => 1, 'RIGHT' => 1, 'RLIKE' => 1, 'TABLE' => 1,
        'UNION' => 1, 'USAGE' => 1, 'USING' => 1, 'WHERE' => 1,
        'WHILE' => 1, 'WRITE' => 1,
        'BEFORE' => 1, 'BIGINT' => 1, 'BINARY' => 1, 'CHANGE' => 1,
        'COLUMN' => 1, 'CREATE' => 1, 'CURSOR' => 1, 'DELETE' => 1,
        'DOUBLE' => 1, 'ELSEIF' => 1, 'EXISTS' => 1, 'FLOAT4' => 1,
        'FLOAT8' => 1, 'HAVING' => 1, 'IGNORE' => 1, 'INFILE' => 1,
        'INSERT' => 1, 'LINEAR' => 1, 'OPTION' => 1, 'REGEXP' => 1,
        'RENAME' => 1, 'REPEAT' => 1, 'RETURN' => 1, 'REVOKE' => 1,
        'SCHEMA' => 1, 'SELECT' => 1, 'UNIQUE' => 1, 'UNLOCK' => 1,
        'UPDATE' => 1, 'VALUES' => 1,
        'ANALYZE' => 1, 'BETWEEN' => 1, 'CASCADE' => 1, 'COLLATE' => 1,
        'CONVERT' => 1, 'DECIMAL' => 1, 'DECLARE' => 1, 'DEFAULT' => 1,
        'DELAYED' => 1, 'ESCAPED' => 1, 'EXPLAIN' => 1, 'FOREIGN' => 1,
        'INTEGER' => 1, 'ITERATE' => 1, 'LEADING' => 1, 'NATURAL' => 1,
        'NUMERIC' => 1, 'OUTFILE' => 1, 'PRIMARY' => 1, 'RELEASE' => 1,
        'REPLACE' => 1, 'REQUIRE' => 1, 'SCHEMAS' => 1, 'SPATIAL' => 1,
        'TINYINT' => 1, 'TRIGGER' => 1, 'VARCHAR' => 1, 'VARYING' => 1,
        'CONTINUE' => 1, 'DATABASE' => 1, 'DAY_HOUR' => 1,
        'DESCRIBE' => 1, 'DISTINCT' => 1, 'ENCLOSED' => 1,
        'FULLTEXT' => 1, 'INTERVAL' => 1, 'LONGBLOB' => 1,
        'LONGTEXT' => 1, 'MODIFIES' => 1, 'OPTIMIZE' => 1,
        'RESTRICT' => 1, 'SMALLINT' => 1, 'SPECIFIC' => 1,
        'SQLSTATE' => 1, 'STARTING' => 1, 'TINYBLOB' => 1,
        'TINYTEXT' => 1, 'TRAILING' => 1, 'UNSIGNED' => 1,
        'UTC_DATE' => 1, 'UTC_TIME' => 1, 'ZEROFILL' => 1,
        'CHARACTER' => 1, 'CONDITION' => 1, 'DATABASES' => 1,
        'LOCALTIME' => 1, 'MEDIUMINT' => 1, 'MIDDLEINT' => 1,
        'PRECISION' => 1, 'PROCEDURE' => 1, 'SENSITIVE' => 1,
        'SEPARATOR' => 1, 'VARBINARY' => 1,
        'ACCESSIBLE' => 1, 'ASENSITIVE' => 1, 'CONSTRAINT' => 1,
        'DAY_MINUTE' => 1, 'DAY_SECOND' => 1, 'MEDIUMBLOB' => 1,
        'MEDIUMTEXT' => 1, 'OPTIONALLY' => 1, 'READ_WRITE' => 1,
        'REFERENCES' => 1, 'SQLWARNING' => 1, 'TERMINATED' => 1,
        'YEAR_MONTH' => 1,
        'DISTINCTROW' => 1, 'HOUR_MINUTE' => 1, 'HOUR_SECOND' => 1,
        'INSENSITIVE' => 1,
        'CURRENT_DATE' => 1, 'CURRENT_TIME' => 1, 'CURRENT_USER' => 1,
        'LOW_PRIORITY' => 1, 'SQLEXCEPTION' => 1, 'VARCHARACTER' => 1,
        'DETERMINISTIC' => 1, 'HIGH_PRIORITY' => 1, 'MINUTE_SECOND' => 1,
        'STRAIGHT_JOIN' => 1, 'UTC_TIMESTAMP' => 1,
        'LOCALTIMESTAMP' => 1, 'SQL_BIG_RESULT' => 1,
        'DAY_MICROSECOND' => 1,
        'HOUR_MICROSECOND' => 1, 'SQL_SMALL_RESULT' => 1,
        'CURRENT_TIMESTAMP' => 1,
        'MINUTE_MICROSECOND' => 1, 'NO_WRITE_TO_BINLOG' => 1,
        'SECOND_MICROSECOND' => 1,
        'SQL_CALC_FOUND_ROWS' => 1,
        'MASTER_SSL_VERIFY_SERVER_CERT' => 1,

        'AT' => 2, 'DO' => 2, 'IO' => 2, 'NO' => 2, 'XA' => 2,
        'ANY' => 2, 'AVG' => 2, 'BDB' => 2, 'BIT' => 2, 'CPU' => 2, 'DAY' => 2,
        'END' => 2, 'IPC' => 2, 'NDB' => 2, 'NEW' => 2, 'ONE' => 2, 'ROW' => 2,
        'BOOL' => 2, 'BYTE' => 2, 'CODE' => 2, 'CUBE' => 2, 'DATA' => 2, 'DATE' => 2,
        'DISK' => 2, 'ENDS' => 2, 'ENUM' => 2, 'FAST' => 2, 'FILE' => 2, 'FULL' => 2,
        'GOTO' => 2, 'HASH' => 2, 'HELP' => 2, 'HOST' => 2, 'HOUR' => 2, 'LAST' => 2,
        'LESS' => 2, 'LIST' => 2, 'LOGS' => 2, 'MODE' => 2, 'NAME' => 2, 'NEXT' => 2,
        'NONE' => 2, 'OPEN' => 2, 'PAGE' => 2, 'PORT' => 2, 'PREV' => 2, 'ROWS' => 2,
        'SOME' => 2, 'STOP' => 2, 'TEXT' => 2, 'THAN' => 2, 'TIME' => 2, 'TYPE' => 2,
        'USER' => 2, 'VIEW' => 2, 'WAIT' => 2, 'WEEK' => 2, 'WORK' => 2, 'X509' => 2,
        'YEAR' => 2,
        'AFTER' => 2, 'ASCII' => 2, 'BEGIN' => 2, 'BLOCK' => 2, 'BTREE' => 2,
        'CACHE' => 2, 'CHAIN' => 2, 'CLOSE' => 2, 'EVENT' => 2, 'EVERY' => 2,
        'FIRST' => 2, 'FIXED' => 2, 'FLUSH' => 2, 'FOUND' => 2, 'HOSTS' => 2,
        'LABEL' => 2, 'LEVEL' => 2, 'LOCAL' => 2, 'LOCKS' => 2, 'MERGE' => 2,
        'MONTH' => 2, 'MUTEX' => 2, 'NAMES' => 2, 'NCHAR' => 2, 'OWNER' => 2,
        'PHASE' => 2, 'POINT' => 2, 'QUERY' => 2, 'QUICK' => 2, 'RAID0' => 2,
        'RESET' => 2, 'RTREE' => 2, 'SHARE' => 2, 'SLAVE' => 2, 'START' => 2,
        'SUPER' => 2, 'SWAPS' => 2, 'TYPES' => 2, 'UNTIL' => 2, 'VALUE' => 2,
        'ACTION' => 2, 'BACKUP' => 2, 'BINLOG' => 2, 'CIPHER' => 2, 'CLIENT' => 2,
        'COMMIT' => 2, 'ENABLE' => 2, 'ENGINE' => 2, 'ERRORS' => 2, 'ESCAPE' => 2,
        'EVENTS' => 2, 'FAULTS' => 2, 'FIELDS' => 2, 'GLOBAL' => 2, 'GRANTS' => 2,
        'IMPORT' => 2, 'INNODB' => 2, 'ISSUER' => 2, 'LEAVES' => 2, 'MASTER' => 2,
        'MEDIUM' => 2, 'MEMORY' => 2, 'MINUTE' => 2, 'MODIFY' => 2, 'OFFSET' => 2,
        'PARSER' => 2, 'PLUGIN' => 2, 'RELOAD' => 2, 'REMOVE' => 2, 'REPAIR' => 2,
        'RESUME' => 2, 'ROLLUP' => 2, 'SECOND' => 2, 'SERIAL' => 2, 'SERVER' => 2,
        'SIGNED' => 2, 'SIMPLE' => 2, 'SOCKET' => 2, 'SONAME' => 2, 'SOUNDS' => 2,
        'SOURCE' => 2, 'STARTS' => 2, 'STATUS' => 2, 'STRING' => 2, 'TABLES' => 2,
        'AGAINST' => 2, 'AUTHORS' => 2, 'BOOLEAN' => 2, 'CHANGED' => 2, 'CHARSET' => 2,
        'COLUMNS' => 2, 'COMMENT' => 2, 'COMPACT' => 2, 'CONTEXT' => 2, 'DEFINER' => 2,
        'DISABLE' => 2, 'DISCARD' => 2, 'DYNAMIC' => 2, 'ENGINES' => 2, 'EXECUTE' => 2,
        'HANDLER' => 2, 'INDEXES' => 2, 'INSTALL' => 2, 'INVOKER' => 2, 'LOGFILE' => 2,
        'MIGRATE' => 2, 'NO_WAIT' => 2, 'OPTIONS' => 2, 'PARTIAL' => 2, 'PLUGINS' => 2,
        'POLYGON' => 2, 'PREPARE' => 2, 'PROFILE' => 2, 'QUARTER' => 2, 'REBUILD' => 2,
        'RECOVER' => 2, 'RESTORE' => 2, 'RETURNS' => 2, 'ROUTINE' => 2, 'SESSION' => 2,
        'STORAGE' => 2, 'STRIPED' => 2, 'SUBJECT' => 2, 'SUSPEND' => 2, 'UNICODE' => 2,
        'UNKNOWN' => 2, 'UPGRADE' => 2, 'USE_FRM' => 2, 'WRAPPER' => 2,
        'CASCADED' => 2, 'CHECKSUM' => 2, 'COALESCE' => 2, 'CONTAINS' => 2,
        'DATAFILE' => 2, 'DATETIME' => 2, 'DUMPFILE' => 2, 'EXTENDED' => 2,
        'FUNCTION' => 2, 'GEOMETRY' => 2, 'INNOBASE' => 2, 'LANGUAGE' => 2,
        'MAXVALUE' => 2, 'MAX_ROWS' => 2, 'MAX_SIZE' => 2, 'MIN_ROWS' => 2,
        'NATIONAL' => 2, 'NVARCHAR' => 2, 'ONE_SHOT' => 2, 'PASSWORD' => 2,
        'PRESERVE' => 2, 'PROFILES' => 2, 'REDOFILE' => 2, 'ROLLBACK' => 2,
        'SCHEDULE' => 2, 'SECURITY' => 2, 'SHUTDOWN' => 2, 'SNAPSHOT' => 2,
        'SWITCHES' => 2, 'TRIGGERS' => 2, 'TRUNCATE' => 2, 'UNDOFILE' => 2,
        'WARNINGS' => 2,
        'AGGREGATE' => 2, 'ALGORITHM' => 2, 'COLLATION' => 2, 'COMMITTED' => 2,
        'DIRECTORY' => 2, 'DUPLICATE' => 2, 'EXPANSION' => 2, 'IO_THREAD' => 2,
        'ISOLATION' => 2, 'NODEGROUP' => 2, 'PACK_KEYS' => 2, 'PARTITION' => 2,
        'RAID_TYPE' => 2, 'READ_ONLY' => 2, 'REDUNDANT' => 2, 'SAVEPOINT' => 2,
        'SCHEDULER' => 2, 'SQL_CACHE' => 2, 'TEMPORARY' => 2, 'TEMPTABLE' => 2,
        'TIMESTAMP' => 2, 'UNDEFINED' => 2, 'UNINSTALL' => 2, 'VARIABLES' => 2,
        'BERKELEYDB' => 2, 'COMPLETION' => 2, 'COMPRESSED' => 2, 'CONCURRENT' => 2,
        'CONNECTION' => 2, 'CONSISTENT' => 2, 'DEALLOCATE' => 2, 'GET_FORMAT' => 2,
        'IDENTIFIED' => 2, 'LINESTRING' => 2, 'MASTER_SSL' => 2, 'MULTIPOINT' => 2,
        'NDBCLUSTER' => 2, 'PARTITIONS' => 2, 'PRIVILEGES' => 2, 'REORGANISE' => 2,
        'REORGANIZE' => 2, 'REPEATABLE' => 2, 'ROW_FORMAT' => 2, 'SQL_THREAD' => 2,
        'TABLESPACE' => 2,
        'EXTENT_SIZE' => 2, 'FRAC_SECOND' => 2, 'MASTER_HOST' => 2, 'MASTER_PORT' => 2,
        'MASTER_USER' => 2, 'MICROSECOND' => 2, 'PROCESSLIST' => 2, 'RAID_CHUNKS' => 2,
        'REPLICATION' => 2, 'SQL_TSI_DAY' => 2, 'TRANSACTION' => 2, 'UNCOMMITTED' => 2,
        'CONTRIBUTORS' => 2, 'DES_KEY_FILE' => 2, 'INITIAL_SIZE' => 2,
        'MULTIPOLYGON' => 2, 'OLD_PASSWORD' => 2, 'PARTITIONING' => 2,
        'RELAY_THREAD' => 2, 'SERIALIZABLE' => 2, 'SQL_NO_CACHE' => 2,
        'SQL_TSI_HOUR' => 2, 'SQL_TSI_WEEK' => 2, 'SQL_TSI_YEAR' => 2,
        'SUBPARTITION' => 2, 'TIMESTAMPADD' => 2,
        'INSERT_METHOD' => 2, 'MASTER_SSL_CA' => 2, 'PAGE_CHECKSUM' => 2,
        'RELAY_LOG_POS' => 2, 'SQL_TSI_MONTH' => 2, 'SUBPARTITIONS' => 2,
        'TIMESTAMPDIFF' => 2, 'TRANSACTIONAL' => 2,
        'AUTO_INCREMENT' => 2, 'AVG_ROW_LENGTH' => 2, 'KEY_BLOCK_SIZE' => 2,
        'MASTER_LOG_POS' => 2, 'MASTER_SSL_KEY' => 2, 'RAID_CHUNKSIZE' => 2,
        'RELAY_LOG_FILE' => 2, 'SQL_TSI_MINUTE' => 2, 'SQL_TSI_SECOND' => 2,
        'TABLE_CHECKSUM' => 2, 'USER_RESOURCES' => 2,
        'AUTOEXTEND_SIZE' => 2, 'DELAY_KEY_WRITE' => 2, 'MASTER_LOG_FILE' => 2,
        'MASTER_PASSWORD' => 2, 'MASTER_SSL_CERT' => 2, 'MULTILINESTRING' => 2,
        'SQL_TSI_QUARTER' => 2,
        'MASTER_SERVER_ID' => 2, 'REDO_BUFFER_SIZE' => 2, 'UNDO_BUFFER_SIZE' => 2,
        'MASTER_SSL_CAPATH' => 2, 'MASTER_SSL_CIPHER' => 2, 'SQL_BUFFER_RESULT' => 2,
        'GEOMETRYCOLLECTION' => 2,
        'SQL_TSI_FRAC_SECOND' => 2,
        'MASTER_CONNECT_RETRY' => 2, 'MAX_QUERIES_PER_HOUR' => 2,
        'MAX_UPDATES_PER_HOUR' => 2, 'MAX_USER_CONNECTIONS' => 2,
        'MAX_CONNECTIONS_PER_HOUR' => 2,

        'NOT NULL' => 4,
        'INDEX KEY' => 4,
        'UNIQUE KEY' => 4,
        'FOREIGN KEY' => 4, 'PRIMARY KEY' => 4, 'PRIMARY KEY' => 4, 'SPATIAL KEY' => 4,
        'FULLTEXT KEY' => 4, 'UNIQUE INDEX' => 4,
        'CHARACTER SET' => 4, 'IF NOT EXISTS' => 4, 'SPATIAL INDEX' => 4,
        'DATA DIRECTORY' => 4, 'FULLTEXT INDEX' => 4,
        'DEFAULT COLLATE' => 4, 'INDEX DIRECTORY' => 4,
        'DEFAULT CHARACTER SET' => 4,

    );
}
