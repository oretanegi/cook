<?php
class Controller_Index extends Controller
{

	/**
	 * トップページ
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('index/index'));
	}
}
