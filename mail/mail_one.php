<?php

function buildRegistrationMail($user) {

	$title = 'Welcome.';
	$body = 'Dear '.$user.', you are now registered on www.smartcontracts.com. Click the link below to login to the site';
	$button = 'Login';

	echo '<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
		<tbody>
			<tr>
				<td bgcolor="#2a2a2a" style="background-color: rgb(42, 42, 42);">
					<div>
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
							<tbody>
								<tr>
									<td width="100%" height="100">
										<div class="sortable_inner ui-sortable">
											<div style="height: 50px;"></div>
											
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e85140" style="border-top-right-radius: 5px; border-top-left-radius: 5px; background-color: rgb(232, 81, 64);" object="drag-module-small">
												<tbody>
													<tr style="height: 50px;"></tr>
												</tbody>
											</table>
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e85140" object="drag-module-small" style="background-color: rgb(232, 81, 64);">
												<tbody>
													<tr>
														<td width="100%" valign="middle" class="image77">
															<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
																<tbody>
																	<tr>
																		<td width="100%">
																			<span><img src="./mail/images/image_77px_not2.png" width="77" alt="" border="0" mc:edit="10"></span>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e85140" object="drag-module-small" style="background-color: rgb(232, 81, 64);">
												<tbody>
													<tr style="height: 50px;"></tr>
												</tbody>
											</table>
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e85140" object="drag-module-small" style="background-color: rgb(232, 81, 64);">
												<tbody>
													<tr>
														<td width="100%" valign="middle">
															<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
																<tbody>
																	<tr>
																		<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 48px; color: rgb(255, 255, 255); line-height: 44px; font-weight: bold;" class="fullCenter" mc:edit="11">
																			<span style="font-weight: normal;">
																				'.$title.'
																			</span>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e85140" object="drag-module-small" style="background-color: rgb(232, 81, 64);">
												<tbody>
													<tr style="height: 50px;"><tr>
													<tr>
														<td width="100%" valign="middle">
															<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
																<tbody>
																	<tr>
																		<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 15px; color: rgb(255, 255, 255); line-height: 24px;" class="fullCenter" mc:edit="12">
																			<span>
																			'.$body.'
																			</span>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e85140" object="drag-module-small" style="background-color: rgb(232, 81, 64);">
												<tbody>
													<tr>
														<td width="100%" valign="middle">
															<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
																<tbody>
																	<tr>
																		<td width="100%" height="40">
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e85140" object="drag-module-small" style="background-color: rgb(232, 81, 64);">
												<tbody>
													<tr>
														<td width="100%" valign="middle">
															<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
																<tbody>
																	<tr>
																		<td>
																			<table border="0" cellpadding="0" cellspacing="0" align="center">
																				<tbody>
																					<tr>
																						<td align="center" height="45" bgcolor="#ffffff" style="border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; padding-left: 30px; padding-right: 30px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(42, 42, 42); text-transform: uppercase; background-color: rgb(255, 255, 255);" mc:edit="13">
																							<span>
																								<a href="#" style="color: rgb(42, 42, 42); font-size: 15px; text-decoration: none; line-height: 34px; width: 100%;">'.$button.'</a>
																							</span>
																						</td>
																					</tr>
																				</tbody>
																			</table>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e85140" object="drag-module-small" style="background-color: rgb(232, 81, 64);">
												<tbody>
													<tr>
														<td width="100%" valign="middle">
															<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
																<tbody>
																	<tr>
																		<td width="100%" height="35"></td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#e85140" style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; background-color: rgb(232, 81, 64);" object="drag-module-small">
												<tbody>
													<tr>
														<td width="100%" valign="middle">
															<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tbody>
															<tr>
																<td width="100%" height="50">
																</td>
															</tr>
															</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<div style="height: 50px;"></div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</td>
			</tr>
		</tbody>
	</table>';
}