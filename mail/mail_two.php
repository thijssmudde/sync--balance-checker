<?php

function buildMail($user) {
	$title = 'Hi '.$user.'! <br>';
	$body = 'You have requested to generate a new password. If not your account may have been compromised. Please visit our support page in that case.';
	$button = 'Create new password';
	$regards = 'Kind regards,<br> Support';

	echo '<table align="center" border="0" cellpadding="0" cellspacing="0" class="full2" style="background-color: rgb(48, 48, 48)" width="100%">
    <tbody>
        <tr>
            <td id="not6">
                <div>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="mobile2" width="100%">
                        <tbody>
                            <tr>
                                <td width="100%">
                                    <div class="sortable_inner ui-sortable">
                                        <table>
                                            <tbody>
                                                <tr height="100"></tr>
                                            </tbody>
                                        </table>

                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="mobile2" style="background-color: rgb(78, 222, 181); border-top-left-radius: 5px; border-top-right-radius: 5px" width="600">
                                            <tbody>
                                                <tr>
                                                    <td class="image75" valign="middle" width="100%">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="fullCenter2" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" width="540">
                                                            <tbody>
                                                                <tr height="30"></tr>

                                                                <tr>
                                                                    <td width="100%">
                                                                        <span><img alt="" border="0" src="./mail/images/not6_icon75px.png" width="75"></span>
                                                                    </td>
                                                                </tr>

                                                                <tr height="30"></tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="mobile2" style="background-color: rgb(255, 255, 255)" width="600">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" width="100%">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="fullCenter2" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" width="540">
                                                            <tbody>
                                                                <tr height="30"></tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="mobile2" style="background-color: rgb(255, 255, 255)" width="600">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" width="100%">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="fullCenter2" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" width="540">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 23px; color: rgb(63, 67, 69); line-height: 30px; font-weight: 100;" valign="middle" width="100%">
                                                                        <span>
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

                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="mobile2" style="background-color: rgb(255, 255, 255)" width="600">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" width="100%">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="fullCenter2" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" width="540">
                                                            <tbody>
                                                                <tr height="30"></tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="mobile2" style="background-color: rgb(255, 255, 255)" width="600">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" width="100%">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="fullCenter2" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" width="540">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(63, 67, 69); line-height: 24px;" valign="middle" width="100%">
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

                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="mobile2" style="background-color: rgb(255, 255, 255)" width="600">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" width="100%">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="fullCenter2" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" width="540">
                                                            <tbody>
                                                                <tr height="40"></tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="mobile2" style="background-color: rgb(255, 255, 255)" width="600">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" width="100%">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="fullCenter2" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" width="540">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" height="45" style="background-color: rgb(78, 222, 181); border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; border-top-left-radius: 5px; border-top-right-radius: 5px; color: rgb(255, 255, 255); font-family: Helvetica, Arial, sans-serif; font-weight: bold; padding-left: 30px; padding-right: 30px">
                                                                                        <span>
																					 <a href="#"
																					style="color: rgb(255, 255, 255); font-size: 15px; text-decoration: none; line-height: 34px; width: 100%;">
																					'.$button.'</a>
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
                                        
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="mobile2" style="background-color: rgb(255, 255, 255)" width="600">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" width="100%">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="fullCenter2" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" width="540">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="35" width="100%"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="mobile2" style="background-color: rgb(255, 255, 255)" width="600">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" width="100%">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="fullCenter2" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" width="540">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(63, 67, 69); line-height: 24px;" valign="middle" width="100%">
                                                                        <span style="font-family: Helvetica; font-weight: normal;">
																	<br>
																	'.$regards.'
																	</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="mobile2" style="background-color: rgb(255, 255, 255); border-bottom-left-radius: 5px; border-bottom-right-radius: 5px" width="600">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" width="100%">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="fullCenter2" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" width="540">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="50" width="100%">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table>
                                            <tbody>
                                                <tr height="90"></tr>
                                            </tbody>
                                        </table>
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