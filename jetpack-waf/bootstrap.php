<?php
define( 'DISABLE_JETPACK_WAF', false );
if ( defined( 'DISABLE_JETPACK_WAF' ) && DISABLE_JETPACK_WAF ) return;
define( 'JETPACK_WAF_MODE', 'silent' );
define( 'JETPACK_WAF_SHARE_DATA', false );
define( 'JETPACK_WAF_SHARE_DEBUG_DATA', false );
define( 'JETPACK_WAF_DIR', '/home/vol15_7/infinityfree.com/if0_37390083/htdocs/wp-content/jetpack-waf' );
define( 'JETPACK_WAF_WPCONFIG', '/home/vol15_7/infinityfree.com/if0_37390083/htdocs/wp-content/../wp-config.php' );
require_once '/home/vol15_7/infinityfree.com/if0_37390083/htdocs/wp-content/plugins/jetpack-protect/vendor/autoload.php';
Automattic\Jetpack\Waf\Waf_Runner::initialize();
