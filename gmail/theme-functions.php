add_action( 'wpgmail_init', 'kirim_wpgmail_smtp' );
function kirim_wpgmail_smtp( $wpgmail ) {
  $wpgmail->isSMTP();
  $wpgmail->Host = SMTP_server;
  $wpgmail->SMTPAuth = SMTP_AUTH;
  $wpgmail->Port = SMTP_PORT;
  $wpgmail->Username = SMTP_username;
  $wpgmail->Password = SMTP_password;
  $wpgmail->SMTPSecure = SMTP_SECURE;
  $wpgmail->From = SMTP_FROM;
  $wpgmail->FromName = SMTP_NAME;
}
