# Variables

0. Variables in PHP are represented by a dollar sign ($) followed by the name of the variable. The variable name is case-sensitive. (http://nl3.php.net/manual/en/language.variables.basics.php)
1. A valid variable name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.
2. Variable has name, type and value.

```php
$var = 'Bob';
$Var = 'Joe';
echo "$var, $Var"; // outputs "Bob, Joe"
```

## [Variable Types](http://nl3.php.net/manual/en/language.types.php)

0. String
1. Int
2. Boolean
3. Float

## Examples

```php
$somevar = 'foo'; // string
$othervar = 123; // int
$onemore = true; // boolean
$andanother = 3.14 // float
```

Variables can change value and type

```php
$foo = 5;
var_dump($foo); // int(5)
$foo = 42;
var_dump($foo); // int(42) changed value only
$foo = 'bar';
var_dump($foo); // string(3) 'bar' changed value and type
```

### Comparing variables

```php
$a = 1;
$b = 1;
var_dump($a == $b); // true
$b = 2;
var_dump($a == $b); // false
$b = '1';
var_dump($a == $b); // true
var_dump($a === $b); // false
var_dump($a > $b); // false
```

# Configuring Sublime Text

0. Install [Sublime Text 3](https://www.sublimetext.com/3)
1. Install [Package Control](https://packagecontrol.io/installation) extenssion 
2. Install [SFTP](https://wbond.net/sublime_packages/sftp/installation) extenssion
3. Create a folder and Add folder to project
4. Map to Remote (creates sftp-config.json file)
5. Configure SFTP
```json
{
    "type": "ftp", // should be ftp

    "save_before_upload": true,
    "upload_on_save": true,
    "sync_down_on_open": true,
    "sync_skip_deletes": false,
    "sync_same_age": true,
    "confirm_downloads": false,
    "confirm_sync": true,
    "confirm_overwrite_newer": false,
    
    "host": "student.itdc.ge", 
    "user": "username",
    "password": "password",
    //"port": "22",
    
    "remote_path": "/", //do not forget
    "ignore_regexes": [
        "\\.sublime-(project|workspace)", "sftp-config(-alt\\d?)?\\.json",
        "sftp-settings\\.json", "/venv/", "\\.svn/", "\\.hg/", "\\.git/",
        "\\.bzr", "_darcs", "CVS", "\\.DS_Store", "Thumbs\\.db", "desktop\\.ini"
    ],
    //"file_permissions": "664",
    //"dir_permissions": "775",
    
    //"extra_list_connections": 0,

    "connect_timeout": 30,
    //"keepalive": 120,
    //"ftp_passive_mode": true,
    //"ftp_obey_passive_host": false,
    //"ssh_key_file": "~/.ssh/id_rsa",
    //"sftp_flags": ["-F", "/path/to/ssh_config"],
    
    //"preserve_modification_times": false,
    //"remote_time_offset_in_hours": 0,
    //"remote_encoding": "utf-8",
    //"remote_locale": "C",
    //"allow_config_upload": false,
}
```
6. Sync Remote to Local
