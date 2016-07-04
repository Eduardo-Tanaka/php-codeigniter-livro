<?php
	class Livro_model extends CI_Model {

		private $id;
	    private $nome;
		private $autor;
		private $data;

        public function __construct()
        {
            // Call the CI_Model constructor
            parent::__construct();
        }

		public function insert() {
			// carrega a biblioteca de validação do code igniter
			$this->load->library('form_validation');

			// regras de validação
			$this->form_validation->set_rules('nome', 'Nome', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
            $this->form_validation->set_rules('autor', 'Autor', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );

			// Se a validação falhar
            if ($this->form_validation->run() == FALSE)
            {
                $msg = array(
                	"class" => "danger",
                	"mensagem" => validation_errors()
                );
            }
            else
            {
            	// Preenche o objeto Livro
            	$this->nome = $_POST['nome'];
				$this->autor = $_POST['autor'];
				$this->data = date('Y-m-d H:i:s');

				// Insere o registro na tabela
            	$this->db->insert('TB_LIVRO', $this);

            	$msg = array(
                	"class" => "success",
                	"mensagem" => "Cadastrado com sucesso!"
                );
            }

            return $msg;
		}

		public function listAll() {
			$query = $this->db->get('TB_LIVRO');
	        return $query->result();
		}

		public function getById($autorId) {
			$query = $this->db->where('id', $autorId)->get('TB_LIVRO');
	        return $query->result_array()[0];
		}

		public function edit($livro) {
			// carrega a biblioteca de validação do code igniter
			$this->load->library('form_validation');

			// regras de validação
			$this->form_validation->set_rules('nome', 'Nome', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );
            $this->form_validation->set_rules('autor', 'Autor', 'required',
                array('required' => 'O campo %s é obrigatório.') // mensagem de erro personalizada
            );

			// Se a validação falhar
            if ($this->form_validation->run() == FALSE)
            {
                $msg = array(
                	"class" => "danger",
                	"mensagem" => validation_errors()
                );
            }
            else
            {
				// Atualiza o registro na tabela
				$this->db->where('id', $livro['id']);
				$this->db->update('TB_LIVRO', $livro);

            	$msg = array(
                	"class" => "success",
                	"mensagem" => "Editado com sucesso!"
                );
            }

            return $msg;
		}

		public function delete($id) {
			$this->db->where('id', $id);
			$this->db->delete('TB_LIVRO');

			$msg = array(
            	"class" => "success",
            	"mensagem" => "Deletado com sucesso!"
            );

            return $msg;
		}
	}
?>