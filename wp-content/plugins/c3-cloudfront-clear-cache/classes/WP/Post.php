<?php
/**
 * WordPress Post class
 *
 * @author hideokamoto <hide.okamoto@digitalcube.jp>
 * @since 6.1.1
 * @package C3_CloudFront_Cache_Controller
 */

namespace C3_CloudFront_Cache_Controller\WP;
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * WordPress Post class
 *
 * @since 6.1.1
 * @package C3_CloudFront_Cache_Controller
 */
class Post {
	/**
	 * WP_Post object
	 *
	 * @var \WP_Post WP_Post object.
	 */
	private $post;

	/**
	 * Set the WP_Post
	 *
	 * @param \WP_Post $post WP_Post object.
	 */
	public function set_post( $post ) {
		$this->post = $post;
	}

	/**
	 * Get the post permalink
	 *
	 * @throws \WP_Error If no post provided, should throw it.
	 */
	public function get_permalink() {
		if ( ! $this->post ) {
			throw new \WP_Error( 'Post is required' );
		}
		return get_permalink( $this->post );
	}

	/**
	 * Parse the url
	 *
	 * @param string $url Target URL.
	 */
	public function parse_url( string $url ) {
		$parsed_url = parse_url( $url );
		$url        = $parsed_url['scheme'] . '://' . $parsed_url['host'];
		if ( isset( $parsed_url['path'] ) ) {
			$url .= $parsed_url['path'];
		}
		return $url;
	}

	/**
	 * Load the post's term links
	 *
	 * @throws \WP_Error If no post provided, should throw it.
	 */
	public function get_the_post_term_links() {
		if ( ! $this->post ) {
			throw new \WP_Error( 'Post is required' );
		}
		$post       = $this->post;
		$taxonomies = get_object_taxonomies( $post->post_type );
		$home_url   = $this->parse_url( home_url() );

		$links = array();

		foreach ( $taxonomies as $taxonomy ) {
			$terms = wp_get_post_terms( $post->ID, $taxonomy );
			if ( is_wp_error( $terms ) ) {
				continue;
			}
			foreach ( $terms as $term ) {
				$url = $this->parse_url( get_term_link( $term, $taxonomy ) );

				if ( trailingslashit( $home_url ) === $url ) {
					continue;
				}
				$links[] = get_term_link( $term, $taxonomy ) . '*';
			}
		}
		return $links;
	}

}