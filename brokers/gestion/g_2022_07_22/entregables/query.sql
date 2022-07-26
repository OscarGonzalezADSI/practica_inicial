-- Toda la información disponible de arrendadores --
CREATE VIEW vista_arrendadores AS 
SELECT
arrendador.id_arrendador,
persona.nombre,
persona.apellido,
persona.cedula,
persona.celular,
persona.direccion,
persona.fecha_registro as reg_peronsa,
arrendador.fecha_registro as reg_arrendador
FROM arrendador, persona
WHERE arrendador.persona_id = persona.id_persona;

-- Toda la información disponible de arrendatario --
CREATE VIEW vista_arrendatarios AS 
SELECT
arrendatario.id_arrendatario,
persona.nombre,
persona.apellido,
persona.cedula,
persona.celular,
persona.direccion,
persona.fecha_registro as reg_peronsa,
arrendatario.fecha_registro as reg_arrendador
FROM arrendatario, persona
WHERE arrendatario.persona_id = persona.id_persona;

-- Conocer los contratos --
CREATE VIEW vista_contratos AS 
SELECT 
`id_contrato`,
(SELECT persona.cedula 
FROM arrendador, persona 
WHERE arrendador.persona_id = persona.id_persona
AND arrendador.id_arrendador = contrato.arrendador_id) AS cedula_arrendador,
(SELECT persona.cedula 
FROM arrendatario, persona 
WHERE arrendatario.persona_id = persona.id_persona
AND arrendatario.id_arrendatario = contrato.arrendatario_id) AS cedula_arrendatario,
propiedad.ciudad,
propiedad.barrio,
propiedad.direccion
FROM contrato, propiedad
WHERE contrato.propiedad_id = propiedad.id_propiedad;