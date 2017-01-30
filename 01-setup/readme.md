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
