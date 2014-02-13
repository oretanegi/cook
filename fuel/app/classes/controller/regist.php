<?php
class Controller_Regist extends Controller
{

	/**
	 * トップページ
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('regist/index'));
	}
}
