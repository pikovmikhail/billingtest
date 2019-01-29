<html>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="your-secure-merchant-ID">

<!-- Specify an Installment Plan button. -->
<input type="hidden" name="cmd" value="_xclick-payment-plan">

<!-- Specify details about the item being purchased under the plan. -->
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="item_name" value="Electric Oven">
<<input type="hidden" name="disp_tot" value="Y">

<!-- Make sure you get the buyer's address during checkout. -- >
<input type="hidden" name="no_shipping" value="2">

<!-- Set up the plan with equal 4 payments, starting at checkout. -->
<input type="hidden" name="option_select0" value="option_0">
<input type="hidden" name="option_select0_name"
value="Pay in 4 installments">
<input type="hidden" name="option_select0_type" value="E">
<input type="hidden" name="option_select0_a0" value="75.00">
<input type="hidden" name="option_select0_p0" value="1">
<input type="hidden" name="option_select0_t0" value="M">
<input type="hidden" name="option_select0_n0" value="4">
<input type="hidden" name="option_index" value="0">

<!-- Display the plan description above the button. -->
<table>
<tr>
<td><input type="hidden" name="on0" value="plan"></td></tr>
<tr>
<td><input type="hidden" name="os0" value ="option_0"></td>
<td><b>Electic Oven</b></td></tr>
<tr>
<td></td>
<td>Number of payments: 4</td></tr>
<tr>
<td></td>
<td>Start payments at checkout</td></tr>
<tr>
<td></td>
<td>
<!-- a 2 column table for due and amount -- >
<table>
<tr>
<th>Due*</th><th>Amount</th></tr>
<tr>
<td colspan="2"><hr /></td></tr>
<tr>
<td>At checkout</td>
<td>$75.00 USD</td></tr>
<tr>
<td>Every 1 month (x 3)</td>
<td>$74.75 USD</td></tr>
<tr>
<td colspan="2"><hr /></td></tr>
<tr>
<td colspan="2"
align="right"><b>Total $300.00 USD</b></td></tr>
</table></td></tr>
<tr>
<td colspan="3"><i>* We calculate payments from the
   date of checkout.</i></td></tr>
</table>

<!-- Display the Installment Plan button. -->
<table>
<tr>
<td><i>Sign up for</i></td></tr>
<tr>
<td><input type="image" name="submit"
src="https://www.paypalobjects.com/en_US/i/btn/btn_installment_plan_LG.gif"
alt="PayPal - The safer, easier way to pay online!"></td></tr>
</table>
<img alt="" width="1" height="1"
src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">

</form>
</html>