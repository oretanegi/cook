<?php
class Controller_Login extends Controller
{

	/**
	 * トップページ
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('login/index'));
	}
}
