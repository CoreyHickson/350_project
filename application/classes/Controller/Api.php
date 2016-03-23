<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Controller_Rest {

	protected $_model;

	public function before() {
		parent::before();
		$this->_model = Model_RestAPI::factory('CharacterModel', $this->_user);
	}

	public function action_index() {
		try {
			$name = $this->request->param('name');
			if($name !== null) {
				$this->get();
			}
			else {
				$this->get_all();
			}
		}
		catch (Kohana_HTTP_Exception $khe) {
			$this->_error($khe);
			return;
		}
		catch (Kohana_Exception $e) {
			$this->_error('An internal error has occured', 500);
			throw $e;
		}
	}

	public function action_create() {
		try {
            $this->rest_output($this->_model->create($this->_params));
        } catch (Kohana_HTTP_Exception $khe) {
            $this->_error($khe);
            return;
        } catch (Kohana_Exception $e) {
            $this->_error('An internal error has occurred', 500);
            throw $e;
        }
	}

	public function action_update() {
		try {
            $this->rest_output($this->_model->update($this->_params));
        } catch (Kohana_HTTP_Exception $khe) {
            $this->_error($khe);
            return;
        } catch (Kohana_Exception $e) {
            $this->_error('An internal error has occurred', 500);
            throw $e;
        }
	}

	public function action_delete() {
		$this->response->body($this->_params['id']);

		try {
            $this->rest_output($this->_model->delete($this->_params));
        } catch (Kohana_HTTP_Exception $khe) {
            $this->_error($khe);
            return;
        } catch (Kohana_Exception $e) {
            $this->_error('An internal error has occurred', 500);
            throw $e;
        }
		// try {
  //           $this->rest_output($this->_model->delete($this->_params['id']);
  //       } catch (Kohana_HTTP_Exception $khe) {
  //           $this->_error($khe);
  //           return;
  //       } catch (Kohana_Exception $e) {
  //           $this->_error('An internal error has occurred', 500);
  //           throw $e;
  //       }
	}

	public function get_all() {
		$output = $this->_model->getAll();
		$this->rest_output($output);
	}

	public function get() {
		$name = $this->request->param('name');
		$output = $this->_model->get($name);
		$this->rest_output($output);
	}

	

} // End api
