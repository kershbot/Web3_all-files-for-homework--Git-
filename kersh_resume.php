<?php 
	header('Content-type: application/json');

	if(isset($_GET['request'])){

		if($_GET['request']=='resume'){


			$resume = 	array(
							"Education" => array(
								'Parsons The New School' => array(
									'New York, NY', '2012-present', 
									'Candidate for MFA in Design and Technology', 
									
								),
								'Harvard Graduate School of Education' => array(
									'Cambridge, MA', 
									'2011-12', 
									'M.Ed in Mind, Brain and Education studies', 
								
								),
								'The University of Colorado at Boulder' => array(
									'Boulder CO', 
									'2004-2008', 
									'cum laude',
								)
							),
							"Experience" => array(
								'Parsons Pet Lab' => array(
									'New York, NY', 
									'2012-Present',
									'Curriculum Designer and web manager.',
										),
								'Center for Applied Special Technology' => array(
									'Boston, MA ', 
									'2011-2012',
									'Design Intern',
								),
								'Groupon Account Executive / User Experience Research' => array(
									'Chicago, IL', 
									'2010-2011',
									'Graphic Design',
								),
								'Teach for America ' => array(
									'Washington, DC', 
									'2008-2010',
									'Corp Member: Special Needs Math Teacher',
	
							),
							"Skills" => array(
								'Fluent in:' => array(
									'Adobe Creative Suite', 
									'HTML 5', 
									'Processing', 
									'OpenFrameworks', 
									'Arduino', 
									'MS Office', 
									'Wordpress', 
									'Pages',
									'Keynote'
								),
								'Working knowledge of:' => array( 
									'C++', 
									'CSS',
									'Adobe Flash', 
									'Arduino',
									'JavaScript',
									'Java',
									'OmniGraffle', 
									'PHP'
								),
							),
							
						);	

			echo json_encode($resume);


		}
	}
?>