<?php
/**
 * teachPress template file
 * @package teachpress\core\templates
 * @license http://www.gnu.org/licenses/gpl-2.0.html GPLv2 or later
 * @since 1.0.0
 */

class TP_Template_Lidar implements TP_Publication_Template {
    
    public function get_settings() {
        return array ('name'                => 'teachPress LiDAR',
                      'description'         => 'A modern template for publication lists with LiDAR-inspired design.',
                      'author'              => 'teachPress',
                      'version'             => '1.0',
                      'button_separator'    => ' | ',
                      'citation_style'      => 'teachPress'
        );
    }
    
    /**
     * Returns the body element for a publication list
     * @param string $content   The content of the publication list itself
     * @param array $args       An array with some basic settings for the publication list 
     * @return string
     */
    public function get_body ($content, $args = array() ) {
        return '<div class="tp_lidar_publication_list">' . $content . '</div>';
    }
    
    /**
     * Returns the headline for a publication list or a part of that
     * @param type $content     The content of the headline
     * @param type $args        An array with some basic settings for the publication list
     * @return string
     */
    public function get_headline ($content, $args = array()) {
        $id = ( isset( $args['id'] ) ) ? $args['id'] : $content;
        return '<div class="tp_lidar_headline">
                    <h3 class="tp_lidar_h3" id="tp_h3_' . esc_attr($id) .'">' . $content . '</h3>
                </div>';
    }
    
    /**
     * Returns the headline (second level) for a publication list or a part of that
     * @param type $content     The content of the headline
     * @param type $args        An array with some basic settings for the publication list
     * @return string
     */
    public function get_headline_sl ($content, $args = array()) {
        $id = ( isset( $args['id'] ) ) ? $args['id'] : $content;
        return '<div class="tp_lidar_headline_sl">
                    <h4 class="tp_lidar_h4" id="tp_h4_' . esc_attr($id) .'">' . $content . '</h4>
                </div>';
    }
    
    /**
     * Returns the container for publication images
     * @param string $content               The image element
     * @param string $position              The image position: left, right or bottom
     * @param string $optional_attributes   Optional attributes for the framing container element
     * @return string
     */
    public function get_image($content, $position, $optional_attributes = '') {
        return '<div class="tp_lidar_image_' . $position . '" ' . $optional_attributes . '>' . $content . '</div>';
    }
    
    /**
     * Returns the single entry of a publication list
     * @param object $interface     The interface object
     * @return string
     */
    public function get_entry ($interface) {
        $class = ' tp_lidar_publication_' . $interface->get_type('');
        $s = '<div class="tp_lidar_publication' . $class . '">';
        $s .= $interface->get_number('<div class="tp_lidar_number">', '.</div>');
        $s .= $interface->get_images('left');
        $s .= '<div class="tp_lidar_info">';
        $s .= '<div class="tp_lidar_title_wrapper">';
        $s .= '<div class="tp_lidar_title">' . $interface->get_title() . '</div>';
        $s .= '<div class="tp_lidar_type">' . $interface->get_type() . '</div>';
        $s .= '</div>';
        $s .= $interface->get_author('<div class="tp_lidar_author">', '</div>');
        $s .= '<div class="tp_lidar_venue">' . $interface->get_meta() . '</div>';
        $s .= '<div class="tp_lidar_menu">' . $interface->get_menu_line('(', ')') . '</div>';
        $s .= $interface->get_infocontainer();
        $s .= $interface->get_images('bottom');
        $s .= '</div>';
        $s .= $interface->get_images('right');
        $s .= '</div>';
        return $s;
    }
} 