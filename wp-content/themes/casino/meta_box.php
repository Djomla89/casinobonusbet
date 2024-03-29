<?php
/**
* Meta box generator for WordPress
* Compatible with custom post types
*
* Support input types: text, textarea, checkbox, select, radio
*
* @author: Nikolay Yordanov <me@nyordanov.com>
* @version: 1.0
*
*/

class SmartMetaBox {

protected $meta_box;
protected $id;

static $prefix = '_smartmeta_';

// create meta box based on given data
public function __construct($id, $opts) {
if (!is_admin())
return;

$this->meta_box = $opts;
$this->id = $id;

add_action('add_meta_boxes', array(&amp;$this, 'add'));

add_action('save_post', array(&amp;$this, 'save'));
}

// Add meta box for multiple post types
public function add() {
foreach ($this->meta_box['pages'] as $page) {
add_meta_box($this->id, $this->meta_box['title'], array(&amp;$this, 'show'), $page, $this->meta_box['context'], $this->meta_box['priority']);
}
}

// Callback function to show fields in meta box
public function show($post) {
// Use nonce for verification
echo '<input type="hidden" name="'.$this->id.'_meta_box_nonce" value="', wp_create_nonce('smartmetabox'.$this->id), '" />';

echo '<table class="form-table">';

foreach ($this->meta_box['fields'] as $field) {
extract($field);

$id = self::$prefix.$id;

$value = self::get($field['id']);
if(empty($value) &amp;&amp; !sizeof(self::get($field['id'], false))) {
$value = isset($field['default']) ? $default : '';
}

echo '<tr>',
'<th style="width:20%"><label for="', $id, '">', $name, '</label></th>',
'<td>';

include "fields/$type.php";

if(isset($desc)) {
echo '&amp;nbsp;<span>'.$desc.'</span>';
}
echo '</td></tr>';
}

echo '</table>';
}

// Save data from meta box
public function save($post_id) {
// verify nonce
if (!isset($_POST[$this->id.'_meta_box_nonce']) || !wp_verify_nonce($_POST[$this->id.'_meta_box_nonce'], 'smartmetabox'.$this->id)) {
return $post_id;
}

// check autosave
if (defined('DOING_AUTOSAVE') &amp;&amp; DOING_AUTOSAVE) {
return $post_id;
}

// check permissions
if ('post' == $_POST['post_type']) {
if (!current_user_can('edit_post', $post_id)) {
return $post_id;
}
} elseif (!current_user_can('edit_page', $post_id)) {
return $post_id;
}

foreach ($this->meta_box['fields'] as $field) {
$name = self::$prefix.$field['id'];

if(isset($_POST[$name]) || isset($_FILES[$name])) {
$old = self::get($field['id'], true, $post_id);
$new = $_POST[$name];

if($new != $old) {
self::set($field['id'], $new, $post_id);
}
} elseif($field['type'] == 'checkbox') {
/*
* Checkboxes are not send in POST if they are not checked;
* We should set them to 'false' instead of deleting them;
* Otherwise, we won't be able to distinguish them from new fields, which have not been saved yet.
*/
self::set($field['id'], 'false', $post_id);
} else {
self::delete($field['id'], $name);
}
}
}

static function get($name, $single = true, $post_id = null) {
global $post;

return get_post_meta( isset($post_id) ? $post_id : $post->ID, self::$prefix.$name, $single);
}

static function set($name, $new, $post_id = null) {
global $post;

return update_post_meta( isset($post_id) ? $post_id : $post->ID, self::$prefix.$name, $new);
}

static function delete($name, $post_id = null) {
global $post;

return delete_post_meta( isset($post_id) ? $post_id : $post-<ID, self::$prefix.$name);
}

};

function add_smart_meta_box($id, $opts) {
>new SmartMetaBox($id, $opts);
}
?>
