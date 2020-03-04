<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*!
* codeigniter-richfilemanager
* https://github.com/isreehari/codeigniter-richfilemanager 
*/

/**
 *  RichFilemanager configuration file for Local storage.
 *
 *  @license     MIT License
 *  @author      Pavel Solomienko <https://github.com/servocoder/>
 *  @copyright   Authors
 */
echo APPPATH;

$config = array(
                "local" => [
                                /**
                                 * Configure Logger class
                                 */
                                "logger" => [
                                    "enabled" => true,
                                    /**
                                     * Default value "null".
                                     * Full path to log file, e.g. "/var/log/filemanager/logfile".
                                     * By default the application writes logs to "filemanager.log" file that located at sys_get_temp_dir()
                                     */
                                    "file" => APPPATH.'logs/richfilemanager-log.php',
                                ],
                                /**
                                 * General options section
                                 */
                                "options" => [
                                    /**
                                     * Default value "true".
                                     * By default the application will search `fileRoot` folder under server root folder.
                                     * Set value to "false" in case the `fileRoot` folder located outside server root folder.
                                     * If `fileRoot` options is set to "false", `serverRoot` value is ignored - always "true".
                                     */
                                    "serverRoot" => true,
                                    /**
                                     * Default value "false". Path to the user storage folder.
                                     * By default the application will determine the path itself based on $_SERVER['DOCUMENT_ROOT'].
                                     * You can set specific path to user storage folder with the following rules:
                                     * - absolute path in case `serverRoot` set to "false", e.g. "/var/www/html/filemanager/userfiles/"
                                     * - relative path in case `serverRoot` set to "true", e.g. "/filemanager/userfiles/"
                                     */
                                    "fileRoot" => '/billfee/assets/upload',
                                    /**
                                     * The maximum allowed root folder total size (in Bytes). If set to "false", no size limitations applied.
                                     */
                                    "fileRootSizeLimit" => false,
                                    /**
                                     * Default value "false". Deny non-latin characters in file/folder names.
                                     * PHP requires INTL extension installed, otherwise all non-latin characters will be stripped.
                                     */
                                    "charsLatinOnly" => false,
                                ],
                                /**
                                 * Security section
                                 */
                                "security" => [
                                    /**
                                     * Default value "false". Allow write operations.
                                     * Set value to "true" to disable all modifications to the filesystem, including thumbnail generation.
                                     */
                                    "readOnly" => false,
                                    /**
                                     * Default value "true".
                                     * Sanitize file/folder name, replaces gaps and some other special chars.
                                     */
                                    "normalizeFilename" => true,
                                    /**
                                     * Filename extensions are compared against this list, after the right-most dot '.'
                                     * Matched files will be filtered from listing results, and will be restricted from all file operations (both read and write).
                                     */
                                    "extensions" => [
                                        /**
                                         * Default value "ALLOW_LIST". Takes value "ALLOW_LIST" / "DISALLOW_LIST".
                                         * If is set to "ALLOW_LIST", only files with extensions that match `restrictions` list will be allowed, all other files are forbidden.
                                         * If is set to "DISALLOW_LIST", all files are allowed except of files with extensions that match `restrictions` list.
                                         */
                                        "policy" => "ALLOW_LIST",
                                        /**
                                         * Default value "true".
                                         * Whether extension comparison should be case sensitive.
                                         */
                                        "ignoreCase" => true,
                                        /**
                                         * List of allowed / disallowed extensions, depending on the `policy` value.
                                         * To allow / disallow files without extension, add / remove the empty string "" to / from this list.
                                         */
                                        "restrictions" => [
                                            "",
                                            "jpg",
                                            "jpe",
                                            "jpeg",
                                            "gif",
                                            "png",
                                            "svg",
                                            "txt",
                                            "pdf",
                                            "odp",
                                            "ods",
                                            "odt",
                                            "rtf",
                                            "doc",
                                            "docx",
                                            "xls",
                                            "xlsx",
                                            "ppt",
                                            "pptx",
                                            "csv",
                                            "ogv",
                                            "avi",
                                            "mkv",
                                            "mp4",
                                            "webm",
                                            "m4v",
                                            "ogg",
                                            "mp3",
                                            "wav",
                                            "zip",
                                            "md",
                                        ],
                                    ],
                                    /**
                                     * Files and folders paths relative to the user storage folder (see `fileRoot`) are compared against this list.
                                     * Matched items will be filtered from listing results, and will be restricted from all file operations (both read and write).
                                     */
                                    "patterns" => [
                                        /**
                                         * Default value "ALLOW_LIST". Takes value "ALLOW_LIST" / "DISALLOW_LIST".
                                         * If is set to "ALLOW_LIST", only files and folders that match `restrictions` list will be allowed, all other files are forbidden.
                                         * If is set to "DISALLOW_LIST", all files and folders are allowed except of ones that match `restrictions` list.
                                         */
                                        "policy" => "DISALLOW_LIST",
                                        /**
                                         * Default value "true".
                                         * Whether patterns comparison should be case sensitive.
                                         */
                                        "ignoreCase" => true,
                                        /**
                                         * List of allowed / disallowed patterns, depending on the `policy` value.
                                         */
                                        "restrictions" => [
                                            // files
                                            "*/.htaccess",
                                            "*/web.config",
                                            // folders
                                            "*/.CDN_ACCESS_LOGS/*",
                                        ],
                                    ],
                                    /**
                                     * Rules for symbolic links that point to files/folders OUTSIDE the `fileroot` folder.
                                     * Targets of symbolic links INSIDE the `fileroot` folder are allowed by default.
                                     */
                                    "symlinks" => [
                                        /**
                                         * Default value "false".
                                         * Allow to link ANY path when set to "true" - quite unsecure.
                                         * Target path will be restricted only by OS permissions.
                                         */
                                        "allowAll" => false,
                                        /**
                                         * List of files/folders that can be linked with symlinks.
                                         * All contents of listed folder are allowed to be linked as well.
                                         * Use absolute server paths.
                                         */
                                        "allowPaths" => [],
                                    ],
                                ],
                                /**
                                 * Upload section
                                 */
                                "upload" => [
                                    /**
                                     * Default value "16000000" (16 MB).
                                     * The maximum allowed file size (in Bytes). If set to "false", no size limitations applied.
                                     * See https://github.com/blueimp/jQuery-File-Upload/wiki/Options#maxfilesize.
                                     */
                                    "fileSizeLimit" => 16000000,
                                    /**
                                     * Default value "false".
                                     * If set to "true" files will be overwritten on uploads if they have same names, otherwise an index will be added.
                                     */
                                    "overwrite" => false,
                                    /**
                                     * Upload parameter name, that is expected to contains uploaded file data - $_FILES[paramName].
                                     * Good usecase example is CKEditor image upload plugin, that sends files within "upload" name.
                                     */
                                    "paramName" => "upload",
                                ],
                                /**
                                 * Images section
                                 */
                                "images" => [
                                    /**
                                     * Uploaded image settings.
                                     * To disable resize set both `maxWidth` and `maxHeight` to "false".
                                     */
                                    "main" => [
                                        /**
                                         * Default value "true".
                                         * Automatically rotate images based on EXIF meta data.
                                         */
                                        "autoOrient" => true,
                                        /**
                                         * Default value "1280".
                                         * Resize maximum width in pixels. Takes integer values or "false".
                                         */
                                        "maxWidth" => 1280,
                                        /**
                                         * Default value "1024".
                                         * Resize maximum height in pixels. Takes integer values or "false".
                                         */
                                        "maxHeight" => 1024,
                                    ],
                                    /**
                                     * Thumbnail creation settings of uploaded image.
                                     */
                                    "thumbnail" => [
                                        /**
                                         * Default value "true".
                                         * Generate thumbnails using PHP to increase performance on listing directory.
                                         */
                                        "enabled" => true,
                                        /**
                                         * Default value "true".
                                         * If set to "false", it will generate thumbnail each time the image is requested. Decreased performance.
                                         */
                                        "cache" => true,
                                        /**
                                         * Default value "_thumbs/".
                                         * Folder to store thumbnails, invisible via filemanager.
                                         * If you want to make it visible, just remove it from `excluded_dirs` configuration option.
                                         */
                                        "dir" => "_thumbs/",
                                        /**
                                         * Default value "true".
                                         * Crop thumbnails. Set dimensions below to create square thumbnails of a particular size.
                                         */
                                        "crop" => true,
                                        /**
                                         * Default value "64".
                                         * Maximum crop width in pixels.
                                         */
                                        "maxWidth" => 64,
                                        /**
                                         * Default value "64".
                                         * Maximum crop height in pixels.
                                         */
                                        "maxHeight" => 64,
                                    ]
                                ],
                                /**
                                 * Default mode while creating new folder.
                                 */
                                "mkdir_mode" => 0755,
                            ],
                "s3" =>  [

                        /**
                         * Default value "false".
                         * Whether to store images thumbnails locally (faster; save traffic and requests)
                         */
                        'images' => [
                                        'thumbnail'=>[
                                                        'useLocalStorage' => false
                                                    ]
                                        ],
                        /**
                         * Default value "true".
                         * Whether to perform bulk operations on "folders" (rename/move/copy)
                         * NOTE: S3 is not a filesystem, it operates with "objects" and it has no such thing as "folder".
                         * When you are performing operation like delete/rename/move/copy on "directory" the plugin actually performs
                         * multiple operations for each object prefixed with the "directory" name in the background. The more objects you have
                         * in your "directory", the more requests will be sent to simulate the "recursive mode".
                         * DELETE requests are not charged so they are not restricted with with option.
                         *
                         * Links with some explanations:
                         * http://stackoverflow.com/a/12523414/1789808
                         * http://stackoverflow.com/questions/33363254/aws-s3-rename-directory-object
                         * http://stackoverflow.com/questions/33000329/cost-of-renaming-a-folder-in-aws-s3-bucket
                         */
                        'allowBulk' => true,

                        /**
                         * Each bucket or object (file or folder) at S3 storage has an Access Control List (ACL) attached to it as a subresource.
                         * It defines which AWS accounts or groups are granted access and the type of access.
                         *
                         * When you perform create or update operations on S3 object there are 2 ways to deal with ACL:
                         *
                         * 1. ACL_POLICY_DEFAULT
                         * Apply "defaultAcl" policy (see below) to all S3 objects regardless of the operation.
                         * Used by default. It's a rough way, but appropriate if all your objects are assumed to share a single ACL policy.
                         *
                         * 2. ACL_POLICY_INHERIT
                         * Inherits the ACL policies of a source/parent object.
                         * When your create new folder or upload new file it will take ACL rules of parent object (or bucket if root).
                         * When you perform operation on existing S3 object (copy/move/rename) it will preserve ACL rules of source object.
                         *
                         * NOTE: S3 doesn't provide ACL policies along with object data.
                         * An additional GET request will be sent to retrieve ACL policies for each source/parent object.
                         * This will result in regression of RFM responsiveness and extra charges of AWS billing.
                         * For example, if you copy/move/rename an object that contains 1000 nested objects you will be billed for another 1000 of GET requests.
                         * Original discussion: https://github.com/servocoder/RichFilemanager-PHP/issues/6
                         */
                         'aclPolicy' => "\RFM\Repository\S3\StorageHelper::ACL_POLICY_DEFAULT",

                         /**
                          * The Server-side encryption algorithm used when storing objects in S3.
                          * Valid values: null|AES256|aws:kms
                          * http://docs.aws.amazon.com/AmazonS3/latest/dev/serv-side-encryption.html
                          * http://docs.aws.amazon.com/AmazonS3/latest/dev/UsingServerSideEncryption.html
                          */
                         'encryption' => null,

                         /*******************************************************************************
                          * S3 SETTINGS
                          * Check options description: https://github.com/frostealth/yii2-aws-s3
                          ******************************************************************************/
                        'credentials' => [
                                                    'region' => 'your region',
                                                    'bucket' => 'your aws s3 bucket',
                                                    'endpoint' => null,
                                                    // Aws\Credentials\CredentialsInterface|array|callable
                                                    'credentials' => [
                                                        'key' => 'your aws s3 key',
                                                        'secret' => 'your aws s3 secret',
                                                    ],
                                                    'options' => [
                                                        'use_path_style_endpoint' => false,
                                                    ],
                                                    'defaultAcl' => "\RFM\Repository\S3\StorageHelper::ACL_PUBLIC_READ",
                                                    //'cdnHostname' => 'http://example.cloudfront.net',
                                                    'debug' => false, // bool|array
                            ],
                ]
            );