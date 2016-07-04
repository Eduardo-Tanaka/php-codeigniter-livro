<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livro extends CI_Controller {

	public function index()
	{
		$data['title'] = "Livros"; // can be change according to views
        $this->load->template('livro/index', $data); // this will load the view file
	}

	public function cadastro()
	{
		$this->load->library('form_validation');

		$data['msg'] = null;
		if($_POST){
			$this->load->model('Livro_model');
			$data['msg'] = $this->Livro_model->insert();
		}
		$data['title'] = "Cadastro de Livro"; // can be change according to views
        $this->load->template('livro/cadastro', $data); // this will load the view file
	}

	public function lista()
	{
		$data['msg'] = null;
		$this->load->library('session');
		$this->load->model('Livro_model');
		$data['livros'] = $this->Livro_model->listAll();

		$tabela = '';
		foreach ($data['livros'] as $row)
		{
       		$tabela .= 
       		'<tr>
       			<td>' . $row->nome . '</td>
       			<td>' . $row->autor . '</td>
       			<td>' . date('d/m/Y', strtotime($row->data)) . '</td>
       			<td><a class="btn btn-success" href="' . base_url('/livro/editar/' . $row->id) . '">Editar <i class="fa fa-pencil" aria-hidden="true"></i></a></td>
       			<td><a class="btn btn-danger" href="' . base_url('/livro/deletar/' . $row->id) . '">Deletar <i class="fa fa-trash" aria-hidden="true"></i></a></td>
       		</tr>';
		}

		$data["linhas"] = $tabela;
		$data['title'] = "Lista de Livros"; // can be change according to views
        $this->load->template('livro/lista', $data); // this will load the view file
	}

	public function editar($id)
	{
		$this->load->library('form_validation');
		$this->load->model('Livro_model');

		$data['msg'] = null;
		if($_POST) {	
			$livro = array (
			 	'id' => $this->input->post('id'),
            	'nome' => $this->input->post('nome'),
            	'autor' => $this->input->post('autor') 
			);	
			$data['msg'] = $this->Livro_model->edit($livro);
		} 

		$data['livro'] = $this->Livro_model->getById($id);

		$data['title'] = "Edição de Livro"; // can be change according to views
        $this->load->template('livro/editar', $data); // this will load the view file
	}

	public function deletar($id)
	{
		$this->load->library('session');
		$this->load->model('Livro_model');
		$data['msg'] = $this->Livro_model->delete($id);

		// store data to flashdata
		$this->session->set_flashdata('msg', $data['msg']['mensagem']);

		redirect('livro/lista');
	}
}
