<?php

// This file `autoload_classmap_packages.php` was auto generated by automattic/jetpack-autoloader.

$vendorDir = dirname(__DIR__);
$baseDir   = dirname($vendorDir);

return array( 
	'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => array(
		'version' => '2.1.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php'
	),
	'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => array(
		'version' => '2.1.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php'
	),
	'Automattic\\Jetpack\\Plugin\\Tracking' => array(
		'version' => 'dev-branch-8.8',
		'path'    => $baseDir . '/src/class-tracking.php'
	),
	'Automattic\\Jetpack\\Sync\\Defaults' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-defaults.php'
	),
	'Automattic\\Jetpack\\Sync\\Sender' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-sender.php'
	),
	'Automattic\\Jetpack\\Sync\\Replicastore_Interface' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/interface-replicastore.php'
	),
	'Automattic\\Jetpack\\Sync\\Replicastore' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-replicastore.php'
	),
	'Automattic\\Jetpack\\Sync\\Actions' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-actions.php'
	),
	'Automattic\\Jetpack\\Sync\\Functions' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-functions.php'
	),
	'Automattic\\Jetpack\\Sync\\Utils' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-utils.php'
	),
	'Automattic\\Jetpack\\Sync\\Lock' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-lock.php'
	),
	'Automattic\\Jetpack\\Sync\\Codec_Interface' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/interface-codec.php'
	),
	'Automattic\\Jetpack\\Sync\\Main' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-main.php'
	),
	'Automattic\\Jetpack\\Sync\\Queue_Buffer' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-queue-buffer.php'
	),
	'Automattic\\Jetpack\\Sync\\Users' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-users.php'
	),
	'Automattic\\Jetpack\\Sync\\Simple_Codec' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-simple-codec.php'
	),
	'Automattic\\Jetpack\\Sync\\Queue' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-queue.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-modules.php'
	),
	'Automattic\\Jetpack\\Sync\\Listener' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-listener.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Posts' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-posts.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Attachments' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-attachments.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Full_Sync_Immediately' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-full-sync-immediately.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\WooCommerce' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-woocommerce.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\WP_Super_Cache' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-wp-super-cache.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Module' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-module.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Plugins' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-plugins.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Menus' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-menus.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Stats' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-stats.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Meta' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-meta.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Users' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-users.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Comments' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-comments.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Options' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-options.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Constants' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-constants.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Term_Relationships' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-term-relationships.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Terms' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-terms.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Themes' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-themes.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Network_Options' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-network-options.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Protect' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-protect.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Import' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-import.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Callables' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-callables.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Full_Sync' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-full-sync.php'
	),
	'Automattic\\Jetpack\\Sync\\Modules\\Updates' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/modules/class-updates.php'
	),
	'Automattic\\Jetpack\\Sync\\JSON_Deflate_Array_Codec' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-json-deflate-array-codec.php'
	),
	'Automattic\\Jetpack\\Sync\\Settings' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-settings.php'
	),
	'Automattic\\Jetpack\\Sync\\Health' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-health.php'
	),
	'Automattic\\Jetpack\\Sync\\Server' => array(
		'version' => '1.14.4.0',
		'path'    => $vendorDir . '/automattic/jetpack-sync/src/class-server.php'
	),
	'Automattic\\Jetpack\\JITMS\\Post_Connection_JITM' => array(
		'version' => '1.8.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-jitm/src/class-post-connection-jitm.php'
	),
	'Automattic\\Jetpack\\JITMS\\Pre_Connection_JITM' => array(
		'version' => '1.8.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-jitm/src/class-pre-connection-jitm.php'
	),
	'Automattic\\Jetpack\\JITMS\\JITM' => array(
		'version' => '1.8.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-jitm/src/class-jitm.php'
	),
	'Automattic\\Jetpack\\Device_Detection' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-device-detection/src/class-device-detection.php'
	),
	'Automattic\\Jetpack\\Device_Detection\\User_Agent_Info' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-device-detection/src/class-user-agent-info.php'
	),
	'Automattic\\Jetpack\\Config' => array(
		'version' => '1.3.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-config/src/class-config.php'
	),
	'Jetpack_Sync_Settings' => array(
		'version' => '1.3.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-compat/legacy/class-jetpack-sync-settings.php'
	),
	'JetpackTracking' => array(
		'version' => '1.3.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-compat/legacy/class-jetpacktracking.php'
	),
	'Jetpack_Client' => array(
		'version' => '1.3.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-compat/legacy/class-jetpack-client.php'
	),
	'Jetpack_Sync_Modules' => array(
		'version' => '1.3.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-compat/legacy/class-jetpack-sync-modules.php'
	),
	'Jetpack_Sync_Actions' => array(
		'version' => '1.3.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-compat/legacy/class-jetpack-sync-actions.php'
	),
	'Automattic\\Jetpack\\Backup\\Helper_Script_Manager' => array(
		'version' => '1.0.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-backup/src/class-helper-script-manager.php'
	),
	'Automattic\\Jetpack\\Abtest' => array(
		'version' => '1.5.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-abtest/src/class-abtest.php'
	),
	'Automattic\\Jetpack\\A8c_Mc_Stats' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-a8c-mc-stats/src/class-a8c-mc-stats.php'
	),
	'Automattic\\Jetpack\\Assets' => array(
		'version' => '1.6.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-assets/src/class-assets.php'
	),
	'Automattic\\Jetpack\\Assets\\Logo' => array(
		'version' => '1.3.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-logo/src/class-logo.php'
	),
	'Automattic\\Jetpack\\Partner' => array(
		'version' => '1.2.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-partner/src/class-partner.php'
	),
	'Automattic\\Jetpack\\Redirect' => array(
		'version' => '1.2.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-redirect/src/class-redirect.php'
	),
	'Jetpack_Tracks_Client' => array(
		'version' => '1.8.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-tracking/legacy/class-jetpack-tracks-client.php'
	),
	'Jetpack_Tracks_Event' => array(
		'version' => '1.8.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-tracking/legacy/class-jetpack-tracks-event.php'
	),
	'Automattic\\Jetpack\\Tracking' => array(
		'version' => '1.8.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-tracking/src/class-tracking.php'
	),
	'Automattic\\Jetpack\\Error' => array(
		'version' => '1.1.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-error/src/class-error.php'
	),
	'Automattic\\Jetpack\\Terms_Of_Service' => array(
		'version' => '1.5.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-terms-of-service/src/class-terms-of-service.php'
	),
	'Jetpack_XMLRPC_Server' => array(
		'version' => '1.15.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-connection/legacy/class-jetpack-xmlrpc-server.php'
	),
	'Jetpack_IXR_Client' => array(
		'version' => '1.15.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-connection/legacy/class-jetpack-ixr-client.php'
	),
	'Jetpack_Signature' => array(
		'version' => '1.15.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-connection/legacy/class-jetpack-signature.php'
	),
	'Jetpack_IXR_ClientMulticall' => array(
		'version' => '1.15.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-connection/legacy/class-jetpack-ixr-clientmulticall.php'
	),
	'Automattic\\Jetpack\\Connection\\Error_Handler' => array(
		'version' => '1.15.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-connection/src/class-error-handler.php'
	),
	'Automattic\\Jetpack\\Connection\\REST_Connector' => array(
		'version' => '1.15.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-connection/src/class-rest-connector.php'
	),
	'Automattic\\Jetpack\\Connection\\Plugin_Storage' => array(
		'version' => '1.15.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-connection/src/class-plugin-storage.php'
	),
	'Automattic\\Jetpack\\Connection\\Client' => array(
		'version' => '1.15.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-connection/src/class-client.php'
	),
	'Automattic\\Jetpack\\Connection\\Utils' => array(
		'version' => '1.15.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-connection/src/class-utils.php'
	),
	'Automattic\\Jetpack\\Connection\\Manager_Interface' => array(
		'version' => '1.15.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-connection/src/interface-manager.php'
	),
	'Automattic\\Jetpack\\Connection\\Plugin' => array(
		'version' => '1.15.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-connection/src/class-plugin.php'
	),
	'Automattic\\Jetpack\\Connection\\Manager' => array(
		'version' => '1.15.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-connection/src/class-manager.php'
	),
	'Automattic\\Jetpack\\Connection\\XMLRPC_Connector' => array(
		'version' => '1.15.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-connection/src/class-xmlrpc-connector.php'
	),
	'Automattic\\Jetpack\\Connection\\Error_Handlers\\Invalid_Blog_Token' => array(
		'version' => '1.15.2.0',
		'path'    => $vendorDir . '/automattic/jetpack-connection/src/error-handlers/class-invalid-blog-token.php'
	),
	'Automattic\\Jetpack\\Roles' => array(
		'version' => '1.2.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-roles/src/class-roles.php'
	),
	'Automattic\\Jetpack\\Status' => array(
		'version' => '1.3.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-status/src/class-status.php'
	),
	'Jetpack_Options' => array(
		'version' => '1.7.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-options/legacy/class-jetpack-options.php'
	),
	'Automattic\\Jetpack\\Constants' => array(
		'version' => '1.4.0.0',
		'path'    => $vendorDir . '/automattic/jetpack-constants/src/class-constants.php'
	),
);

