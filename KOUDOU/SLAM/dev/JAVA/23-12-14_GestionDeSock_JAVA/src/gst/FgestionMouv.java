package gst;
/*Application de gestion de stock dans un magasin
 * Réalisée par Targoto Christian alias chcode à Ndjaména au Tchad en Avril 2018
 * contact:23560316682/ctargoto@gmail.com */
import java.awt.Color;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.ButtonGroup;
import javax.swing.JButton;
import javax.swing.JComboBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JRadioButton;
import javax.swing.JScrollPane;
import javax.swing.JTable;
import javax.swing.JTextField;
import javax.swing.table.DefaultTableModel;

import conn.Connec;

import java.sql.*;

public class FgestionMouv  extends JFrame implements ActionListener {
	JLabel lb1,lb2,lb3,lb4,lb6,lb7;
	JTextField jf4,jf2,jf5,jf6;
	JRadioButton jr1,jr2;
	JButton bt1,bt2,bt3,bt4,bt5,bt6;
	JComboBox jcb,jcb2;
	
	JTable tb;
	JScrollPane sp;
	
	Statement st;
	ResultSet rst;
	Connec cn=new Connec();
	
	public FgestionMouv(){
		this.setTitle("chcode_appli");
		this.setSize(800,450);
		this.setLocationRelativeTo(null);
		JPanel jp=new JPanel();
		jp.setLayout(null);
		jp.setBackground(new Color(0,250,250));
		add(jp);
		lb1=new JLabel("Interface de gestion des mouvements");
		lb1.setFont(new Font("Arial",Font.BOLD,15));
		lb1.setBounds(30,10,300,30);
		jp.add(lb1);
		//formulaire produit
		//id
		lb2=new JLabel("Identifiant");
		lb2.setFont(new Font("Arial",Font.BOLD,12));
		lb2.setBounds(30,50,90,30);
		jp.add(lb2);
		
		jf2=new JTextField();
		jf2.setFont(new Font("Arial",Font.BOLD,12));
		jf2.setBounds(130,50,90,25);
		jp.add(jf2);
		//codeprod
		lb3=new JLabel("CodeProduit");
		lb3.setFont(new Font("Arial",Font.BOLD,12));
		lb3.setBounds(30,90,90,30);
		jp.add(lb3);
		
		jcb2=new JComboBox();
		jcb2.addItem("sr");
		jcb2.addItem("sv");
		jcb2.addItem("sp");
		jcb2.addItem("ncf");
		jcb2.addItem("nd");
		jcb2.addItem("scr1");
		jcb2.setFont(new Font("Arial",Font.BOLD,12));
		jcb2.setBounds(130,90,90,25);
		jp.add(jcb2);
		//quantite
		lb4=new JLabel("Quantité");
		lb4.setFont(new Font("Arial",Font.BOLD,12));
		lb4.setBounds(30,130,90,30);
		jp.add(lb4);
		
		jf4=new JTextField();
		jf4.setFont(new Font("Arial",Font.BOLD,12));
		jf4.setBounds(130,130,90,25);
		jp.add(jf4);
		//date
		lb7=new JLabel("Date");
		lb7.setFont(new Font("Arial",Font.BOLD,12));
		lb7.setBounds(30,170,90,30);
		jp.add(lb7);
		//date
		jcb=new JComboBox();
		jcb.addItem("01-06-2018");jcb.addItem("02-06-2018");jcb.addItem("03-06-2018");jcb.addItem("04-06-2018");
		jcb.addItem("05-06-2018");jcb.addItem("06-06-2018");jcb.addItem("07-06-2018");jcb.addItem("08-06-2018");
		jcb.addItem("08-06-2018");jcb.addItem("08-06-2018");jcb.addItem("10-06-2018");jcb.addItem("11-06-2018");
		jcb.addItem("12-06-2018");jcb.addItem("13-06-2018");jcb.addItem("14-06-2018");jcb.addItem("15-06-2018");
		jcb.setFont(new Font("Arial",Font.BOLD,12));
		jcb.setBounds(130,170,90,25);
		jp.add(jcb);
		//nature
		lb6=new JLabel("Nature");
		lb6.setFont(new Font("Arial",Font.BOLD,12));
		lb6.setBounds(30,210,90,30);
		jp.add(lb6);
		//bouton radio
		jr1=new JRadioButton("depot");
		jr1.setBounds(80,210,70,30);
		jp.add(jr1);
		
		jr2=new JRadioButton("retrait");
		jr2.setBounds(150,210,70,30);
		jp.add(jr2);
		ButtonGroup bg=new ButtonGroup();
		bg.add(jr1);bg.add(jr2);
	
		
		//recherche
		jf5=new JTextField("Identifiant");
		jf5.setFont(new Font("Arial",Font.BOLD,12));
		jf5.setBounds(30,250,90,25);
		jp.add(jf5);
		bt1=new JButton("Recherche");
		bt1.setBounds(130,250,100,25);
		bt1.addActionListener(this);
		jp.add(bt1);
		//bouton
		//insertion
		bt2=new JButton("Insérer");
		bt2.setBounds(30,290,100,25);
		bt2.addActionListener(this);
		jp.add(bt2);
		//suppression
		bt3=new JButton("Supprimer");
		bt3.setBounds(140,290,100,25);
		bt3.addActionListener(this);
		jp.add(bt3);
		//modification
				bt4=new JButton("Modifier");
				bt4.setBounds(30,330,100,25);
				bt4.addActionListener(this);
				jp.add(bt4);
				//mouvement
				bt5=new JButton("Produit");
				bt5.setBounds(140,330,100,25);
				bt5.addActionListener(this);
				jp.add(bt5);
				//requetes
				bt6=new JButton("Requetes");
				bt6.setBounds(80,370,100,25);
				bt6.addActionListener(this);
				jp.add(bt6);
		DefaultTableModel df=new DefaultTableModel();
		init();
		df.addColumn("Identifiant");
		df.addColumn("CodeProduit");
		df.addColumn("Quantité");
		df.addColumn("Nature");
		df.addColumn("Date");
		tb.setModel(df);
		jp.add(sp);
		
		
		
		String qry2="select * from mouvmt";
		try{
			st=cn.connecion().createStatement();
			rst=st.executeQuery(qry2);
			while(rst.next()){
				df.addRow(new Object[]{
				rst.getString("idmv"),rst.getString("codeprd"),rst.getString("quantite"),
				rst.getString("nature"),rst.getString("date")
						
				});
				
			}
		}
		catch(SQLException ex){
			
		}
		
	}
	public void init(){
		tb=new JTable();
		sp=new JScrollPane();
		sp.setViewportView(tb);
		sp.setBounds(300,40,450,300);
	}
	public static void main(String[] args){
		FgestionMouv fg=new FgestionMouv();
		fg.setVisible(true);
		
	}
	@Override
	public void actionPerformed(ActionEvent p) {
		// TODO Auto-generated method stub
		//insertion
		if(p.getSource()==bt2){
			String a,b,c,d,f;
			a=jf2.getText();
			b=jcb2.getSelectedItem().toString();
			c=jf4.getText();
			d=jcb.getSelectedItem().toString();
			if(jr1.isSelected())
				f=jr1.getText();
			else
				f=jr2.getText();
			String qr="insert into mouvmt values('"+a+"','"+b+"','"+c+"','"+f+"','"+d+"') ";
			try{
				st=cn.connecion().createStatement();
				if(JOptionPane.showConfirmDialog(this,"voulez-vous ajoutez un mouvement?",null,JOptionPane.OK_CANCEL_OPTION)==JOptionPane.OK_OPTION){
					st.executeUpdate(qr);
					JOptionPane.showMessageDialog(this,"insertion éffectuée!");
				}
			}
			catch(SQLException ex){
				JOptionPane.showMessageDialog(this,"impossible d'insérer!",null,JOptionPane.ERROR_MESSAGE);
		}
			dispose();
			FgestionMouv fges=new FgestionMouv();
			fges.setVisible(true);
		
	}
		//suppression
		if(p.getSource()==bt3){
			String a;
			a=jf2.getText();
			
			String qr="delete from mouvmt where idmv='"+a+"' ";
			try{
				st=cn.connecion().createStatement();
				if(JOptionPane.showConfirmDialog(this,"voulez-vous supprimer un mouvmt?",null,JOptionPane.OK_CANCEL_OPTION)==JOptionPane.OK_OPTION){
					st.executeUpdate(qr);
					JOptionPane.showMessageDialog(this,"Suppression éffectuée!");
				}
			}
			catch(SQLException ex){
				JOptionPane.showMessageDialog(this,"Suppression impossible!");
		}
			dispose();
			FgestionMouv fges=new FgestionMouv();
			fges.setVisible(true);
		
	}
	//modification
		if(p.getSource()==bt4){
			String a,b,c,d,f;
			a=jf2.getText();
			b=jcb2.getSelectedItem().toString();
			c=jf4.getText();
			d=jcb.getSelectedItem().toString();
			if(jr1.isSelected())
				f=jr1.getText();
			else
				f=jr2.getText();
			String qr="update mouvmt set codeprd='"+b+"',quantite='"+c+"',nature='"+f+"',date='"+d+"'"
					+ "where idmv='"+a+"' ";
			try{
				st=cn.connecion().createStatement();
				if(JOptionPane.showConfirmDialog(this,"voulez-vous modifier un mouvement?",null,JOptionPane.OK_CANCEL_OPTION)==JOptionPane.OK_OPTION){
					st.executeUpdate(qr);
					JOptionPane.showMessageDialog(this,"modification éffectuée!");
				}
			}
			catch(SQLException ex){
				JOptionPane.showMessageDialog(this,"impossible de modifier!",null,JOptionPane.ERROR_MESSAGE);
		}
			dispose();
			FgestionMouv fges=new FgestionMouv();
			fges.setVisible(true);
		
	}
		//recherche
		if(p.getSource()==bt1){
			String a;
			a=jf5.getText();
			
			String qr="select * from mouvmt where idmv='"+a+"' ";
			try{
				st=cn.connecion().createStatement();
				rst=st.executeQuery(qr);
				if(rst.next()){
				 jf2.setText(rst.getString("idmv"));
				 jcb2.setSelectedItem(rst.getString("codeprd"));
				 jf4.setText(rst.getString("quantite"));
				 jcb.setSelectedItem(rst.getString("date"));
				 if(rst.getString("nature").equals("depot"))
					 jr1.setSelected(true);
				 else
					 jr2.setSelected(true);
					 
					 	
				}
				else
					JOptionPane.showMessageDialog(this,"identifiant introuvable!",null,JOptionPane.ERROR_MESSAGE);
				
			}
			catch(SQLException ex){
				
		}
			
		
	}
		//bt5 produit
		if(p.getSource()==bt5){
			dispose();
			FgestionProd fg=new FgestionProd();
			fg.setVisible(true);
			
		}
		//bt6 reqt
		if(p.getSource()==bt6){
			dispose();
			Frequetes fg=new Frequetes();
			fg.setVisible(true);
		}


	}
}
