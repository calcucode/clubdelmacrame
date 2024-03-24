<?php
/**
 * Output a single payment method
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment-method.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<li class="wc_payment_method payment_method_<?php echo esc_attr( $gateway->id ); ?>">
	<input id="payment_method_<?php echo esc_attr( $gateway->id ); ?>" type="radio" class="input-radio" name="payment_method" value="<?php echo esc_attr( $gateway->id ); ?>" <?php checked( $gateway->chosen, true ); ?> data-order_button_text="<?php echo esc_attr( $gateway->order_button_text ); ?>" />

	<label for="payment_method_<?php echo esc_attr( $gateway->id ); ?>">
		<?php echo $gateway->get_title(); /* phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped */ ?> <?php echo $gateway->get_icon(); /* phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped */ ?>
	</label>
	<?php if ( $gateway->has_fields() || $gateway->get_description() ) : ?>
		<div class="payment_box payment_method_<?php echo esc_attr( $gateway->id ); ?>" <?php if ( ! $gateway->chosen ) : /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>style="display:none;"<?php endif; /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>>
			<?php $gateway->payment_fields(); ?>
		</div>
	<?php endif; ?>
</li>
	<style>
table {
  border-collapse: collapse;
  width: 100%;
}
td {
  padding: 10px;
  vertical-align: top;
}
label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  color: #333;
  font-size: 16px;
}
input[type="text"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 16px;
  color: #555;
  box-sizing: border-box;
  margin-bottom: 10px;
}
table {
  border-collapse: collapse;
  width: 100%;
}
td {
  padding: 10px;
}
label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  color: #333;
  width: 100%;
}
input[type="text"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 16px;
  color: #555;
  box-sizing: border-box;
  margin-bottom: 10px;
}
.card-details {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}
.card-details h2 {
  margin-right: 20px;
  font-size: 18px;
}
.card-logos {
  display: flex;
  align-items: center;
}
.card-logos img {
  height: 20px;
  margin-left: 10px;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s ease-in-out;
}
.card-logos img:hover {
  transform: scale(1.1);
}
label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
  color: #333;
}
.input-group {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}
.input-group input {
  flex: 1;
  margin-left: 10px;
  background-color: #f5f5f5;
  border: none;
  padding: 10px;
  border-radius: 5px;
  font-size: 16px;
  color: #555;
}
input {
  display: block;
  margin-bottom: 20px;
  padding: 10px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  color: #555;
  background-color: #f5f5f5;
}
input:focus {
  border-color: #1E90FF;
  outline: none;
}
.label-group {
  display: flex;
  justify-content: space-between;
}
button {
  background-color: #1E90FF;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  padding: 10px 20px;
  cursor: pointer;
}
button:hover {
  background-color: #007fff;
}
</style>
<center>
<div>
  <div>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQC7CieAW4f7cXwMctXmbjZurEyaVxA2qN0w&usqp=CAU" alt="Mastercard">
  </div>
<br>
<h3>Detalles de la tarjeta de crédito</h3>
</center>
<br>
<table>
  <tr>
    <td>
      <label for="card_holder">Titular de la tarjeta</label><br>
      <input type="text" id="card_holder" name="card_holder" required placeholder="Juan Pérez"><br>
      <label for="expiry_date">Fecha de caducidad</label><br>
      <input type="text" id="expiry_date" name="expiry_date" required placeholder="MM/AA"><br>
    </td>
    <td>
      <label for="card_number">Número de tarjeta</label><br>
      <input type="text" id="card_number" name="card_number" required placeholder="xxxx-xxxx-xxxx-xxxx"><br>
      <label for="cvv">Código de seguridad</label><br>
      <input type="text" id="cvv" name="cvv" required placeholder="123"><br>
    </td>
  </tr>
</table>
