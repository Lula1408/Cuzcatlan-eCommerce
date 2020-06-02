<?php
require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/productos.php');

// Se comprueba si existe una acción a realizar, de lo contrario se finaliza el script con un mensaje de error.
if (isset($_GET['action'])) {
    // Se crea una sesión o se reanuda la actual para poder utilizar variables de sesión en el script.
    session_start();
    // Se instancia la clase correspondiente.
    $cliente = new  Clientes;
    // Se declara e inicializa un arreglo para guardar el resultado que retorna la API.
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    // Se verifica si existe una sesión iniciada como administrador, de lo contrario se finaliza el script con un mensaje de error.
	if (isset($_SESSION['id_usuario'])) {
        // Se compara la acción a realizar cuando un administrador ha iniciado sesión.
        switch ($_GET['action']) {
            case 'readAll':
                if ($result['dataset'] = $cliente->readAllClientes()) {
                    $result['status'] = 1;
                } else {
                    $result['exception'] = 'No hay clientes registrados';
                }
                break;
                case 'search':
                    $_POST = $cliente->validateForm($_POST);
                    if ($_POST['search'] != '') {
                        if ($result['dataset'] = $cliente->searchClientes($_POST['search'])) {
                            $result['status'] = 1;
                            $rows = count($result['dataset']);
                            if ($rows > 1) {
                                $result['message'] = 'Se encontraron '.$rows.' coincidencias';
                            } else {
                                $result['message'] = 'Solo existe una coincidencia';
                            }
                        } else {
                            $result['exception'] = 'No hay coincidencias';
                        } 
                    } else {
                        $result['exception'] = 'Ingrese un valor para buscar';
                    }
                    break;
                case 'create':
                    $_POST = $cliente->validateForm($_POST);
                    if ($cliente->setClientes($_POST['nombre'])) {
                        if ($cliente->setApellido($_POST['apellido'])) {
                            if ($cliente->setCorreo($_POST['correo'])) {
                                if ($cliente->setTelefono($_POST['telefono'])) {
                                    if ($cliente->setClave($_POST['clave'])) {
                                        if ($cliente->setDireccion($_POST['direccion'])) {
                                            if ($cliente->setNacimiento($_POST['nacimiento'])) {
                                                if ($cliente->setRegistro($_POST['registro'])) {
                                                    if (is_uploaded_file($_FILES['archivo_cliente']['tmp_name'])) {
                                                        if ($cliente->setImagen($_FILES['archivo_cliente'])) {
                                                            if ($cliente->createCliente()) {
                                                                $result['status'] = 1;
                                                                $result['message'] = 'Cliente creado correctamente';
                                                            } else {
                                                                $result['exception'] = Database::getException();;
                                                            }
                                                        } else {
                                                            $result['exception'] = $producto->getImageError();
                                                        }
                                                    } else {
                                                        $result['exception'] = 'Seleccione una imagen';
                                                    }
                                                } else {
                                                    $result['exception'] = 'Registro incorrecto';
                                                }
                                            } else {
                                                $result['exception'] = 'Nacimiento incorrecto';
                                            }
                                        } else {
                                            $result['exception'] = 'Direccion incorrecta';
                                        }
                                    } else {
                                        $result['exception'] = 'Clave incorrecta';
                                    }
                                } else {
                                    $result['exception'] = 'Telefono incorrecta';
                                }
                            } else {
                                $result['exception'] = 'Correo incorrecta';
                            }
                        } else {
                            $result['exception'] = 'Apellido incorrecto';
                        }
                    } else {
                        $result['exception'] = 'Nombre incorrecto';
                    }
                break;
                case 'readOne':
                    if ($cliente->setId($_POST['id_cliente'])) {
                        if ($result['dataset'] = $cliente->readOneCliente()) {
                            $result['status'] = 1;
                        } else {
                            $result['exception'] = 'Cliente inexistente';
                        }
                    } else {
                        $result['exception'] = 'Cliente incorrecto';
                    }
                    break;
                    case 'update':
                        $_POST = $cliente->validateForm($_POST);
                        if ($cliente->setId($_POST['id_cliente'])) {
                            if ($data = $cliente->readOneCliente()) {
                                if ($cliente->setNombre($_POST['nombre'])) {
                                    if ($cliente->setApellido($_POST['apellido'])) {
                                        if ($cliente->setCorreo($_POST['correo'])) {
                                            if ($cliente->setTelefono($_POST['telefono'])) {
                                                if ($cliente->setClave($_POST['clave'])) {
                                                    if ($cliente->setDireccion($_POST['direccion'])) {
                                                        if ($cliente->setNacimiento($_POST['nacimiento'])) {
                                                            if ($cliente->setRegistro($_POST['registro'])) {
                                                                if (is_uploaded_file($_FILES['archivo_cliente']['tmp_name'])) {
                                                                    if ($cliente->setImagen($_FILES['archivo_cliente'])) {
                                                                        if ($cliente->updateCliente()) {
                                                                            $result['status'] = 1;
                                                                            if ($cliente->deleteFile($cliente->getRuta(), $data['imagen_producto'])) {
                                                                                $result['message'] = 'Cliente modificado correctamente';
                                                                            } else {
                                                                            $result['message'] = 'Cliente modificado pero no se borro la imagen anterior';
                                                                            }
                                                                        } else {
                                                                            $result['exception'] = Database::getException();
                                                                        }
                                                                    } else {
                                                                        $result['exception'] = $producto->getImageError();
                                                                    }
                                                                } else {
                                                                    if ($cliente->updateCliente()) {
                                                                        $result['status'] = 1;
                                                                        $result['message'] = 'Cliente modificado correctamente';
                                                                    } else {
                                                                        $result['exception'] = Database::getException();
                                                                    } 
                                                                }
                                                            } else {
                                                                $result['exception'] = 'Registro incorrecto';
                                                            }
                                                        } else {
                                                            $result['exception'] = 'Nacimiento categoría';
                                                        }
                                                    } else {
                                                        $result['exception'] = 'Direccion incorrecto';
                                                    }
                                                } else {
                                                    $result['exception'] = 'Clave incorrecta';
                                                }
                                            } else {
                                                $result['exception'] = 'Telefono incorrecto';
                                            }
                                        } else {
                                            $result['exception'] = 'Correo inexistente';
                                        }
                                    } else {
                                        $result['exception'] = 'Apellido incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Nombre incorrecto';
                                }  
                            } else {
                                $result['exception'] = 'Id incorrecto';
                            }     
                        break;
                        case 'delete':
                            if ($cliente->setId($_POST['id_cliente'])) {
                                if ($data = $cliente->readOneCliente()) {
                                    if ($cliente->deleteCliente()) {
                                        $result['status'] = 1;
                                        if ($cliente->deleteFile($cliente->getRuta(), $data['imagen_cliente'])) {
                                            $result['message'] = 'Cliente eliminado correctamente';
                                        } else {
                                            $result['message'] = 'Cliente eliminado pero no se borro la imagen';
                                        }
                                    } else {
                                        $result['exception'] = Database::getException();
                                    }
                                } else {
                                    $result['exception'] = 'Cliente inexistente';
                                }
                            } else {
                                $result['exception'] = 'CLiente incorrecto';
                            }
                        
        }
        // Se indica el tipo de contenido a mostrar y su respectivo conjunto de caracteres.
        header('content-type: application/json; charset=utf-8');
        // Se imprime el resultado en formato JSON y se retorna al controlador.
        print(json_encode($result));
    } else {
        exit('Acceso no disponible');
    }
} else {
	exit('Recurso denegado');

                       
}
?>