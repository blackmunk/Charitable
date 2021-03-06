<?php
/**
 * Displays the donation details.
 *
 * Override this template by copying it to yourtheme/charitable/donation-receipt/details.php
 *
 * @author  Studio 164a
 * @package Charitable/Templates/Donation Receipt
 * @since   1.0.0
 * @version 1.3.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* @var Charitable_Donation */
$donation = $view_args['donation'];

?>
<h3 class="charitable-header"><?php _e( 'Your Donation', 'charitable' ) ?></h3>
<table class="donation-details charitable-table">
	<thead>
		<tr>
			<th><?php _e( 'Campaign', 'charitable' ) ?></th>
			<th><?php _e( 'Total', 'charitable' ) ?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ( $donation->get_campaign_donations() as $campaign_donation ) : ?>
		<tr>
			<td class="campaign-name"><?php
				echo $campaign_donation->campaign_name;

				/**
				 * Do something after displaying the campaign name.
				 *
				 * @since 	1.3.0
				 *
				 * @param 	object              $campaign_donation Database record for the campaign donation.
				 * @param 	Charitable_Donation $donation 	 	   The Donation object.
				 */
				do_action( 'charitable_donation_receipt_after_campaign_name', $campaign_donation, $donation );
				?>
			</td>
			<td class="donation-amount"><?php echo charitable_format_money( $campaign_donation->amount ) ?></td>
		</tr>
	<?php endforeach ?>
	</tbody>
	<tfoot>
		<tr>
			<td><?php _e( 'Total', 'charitable' ) ?></td>
			<td><?php echo charitable_format_money( $donation->get_total_donation_amount() ) ?></td>
		</tr>
	</tfoot>
</table>
