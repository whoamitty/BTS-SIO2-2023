package gst;

import java.awt.Color;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

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

public class FgestionProd  extends JFrame implements ActionListener {
	JLabel lb1,lb2,lb3,lb4;
	JTextField jf4,jf5;
	JRadioButton jr1,jr2;
	JButton bt1,bt2,bt3,bt4,bt5,bt6;
	JComboBox jc1,jc2;
	
	JTable tb;
	JScrollPane sp;
	
	Statement st;
	ResultSet rst;
	Connec cn=new Connec();
	
	public FgestionProd(){
		this.setTitle("chcode_appli");
		this.setSize(800,400);
		this.setLocationRelativeTo(null);
		JPanel jp=new JPanel();
		jp.setLayout(null);
		jp.setBackground(new Color(0,250,250));
		add(jp);
		lb1=new JLabel("Interface de gestion des produits");
		lb1.setFont(new Font("Arial",Font.BOLD,15));
		lb1.setBounds(30,10,300,30);
		jp.add(lb1);
		//formulaire produit
		//codeprod
		lb2=new JLabel("CodeProduit");
		lb2.setFont(new Font("Arial",Font.BOLD,12));
		lb2.setBounds(30,50,90,20);
		jp.add(lb2);
		
		jc1=new JComboBox();
		jc1.addItem("sr");
		jc1.addItem("sv");
		jc1.addItem("sp");
		jc1.addItem("ncf");
		jc1.addItem("nd");
		jc1.addItem("scr1");
		
		jc1.setFont(new Font("Arial",Font.BOLD,12));
		jc1.setBounds(130,50,90,25);
		jp.add(jc1);
		//nomprod
		lb3=new JLabel("NomProduit");
		lb3.setFont(new Font("Arial",Font.BOLD,12));
		lb3.setBounds(30,90,90,30);
		jp.add(lb3);
		
		jc2=new JComboBox();
		jc2=new JComboBox();
		jc2.addItem("sardine");
		jc2.addItem("savon");
		jc2.addItem("spagueti");
		jc2.addItem("nescafe");
		jc2.addItem("nido");
		jc2.setFont(new Font("Arial",Font.BOLD,12));
		jc2.setBounds(130,90,90,25);
		jp.add(jc2);
		//prix
		lb4=new JLabel("Prix_unitaire");
		lb4.setFont(new Font("Arial",Font.BOLD,12));
		lb4.setBounds(30,130,90,30);
		jp.add(lb4);
		
		jf4=new JTextField();
		jf4.setFont(new Font("Arial",Font.BOLD,12));
		jf4.setBounds(130,130,90,25);
		jp.add(jf4);
		//recherche
		jf5=new JTextField("CodeProduit");
		jf5.setFont(new Font("Arial",Font.BOLD,12));
		jf5.setBounds(30,170,90,25);
		jp.add(jf5);
		bt1=new JButton("Recherche");
		bt1.setBounds(130,170,100,25);
		bt1.addActionListener(this);
		jp.add(bt1);
		//bouton
		//insertion
		bt2=new JButton("Insérer");
		bt2.setBounds(30,210,100,25);
		bt2.addActionListener(this);
		jp.add(bt2);
		//suppression
		bt3=new JButton("Supprimer");
		bt3.setBounds(140,210,100,25);
		bt3.addActionListener(this);
		jp.add(bt3);
		//modification
				bt4=new JButton("Modifier");
				bt4.setBounds(30,250,100,25);
				bt4.addActionListener(this);
				jp.add(bt4);
				//mouvement
				bt5=new JButton("Mouvement");
				bt5.setBounds(140,250,100,25);
				bt5.addActionListener(this);
				jp.add(bt5);
				//requetes
				bt6=new JButton("Requetes");
				bt6.setBounds(140,250,100,25);
				bt6.addActionListener(this);
				bt6.setBounds(30,290,100,25);
				jp.add(bt6);
		DefaultTableModel df=new DefaultTableModel();
		init();
		df.addColumn("CodeProduit");
		df.addColumn("NomProduit");
		df.addColumn("Prix_unitaire");
		tb.setModel(df);
		jp.add(sp);
		
		String qry2="select * from produit";
		try{
			st=cn.connecion().createStatement();
			rst=st.executeQuery(qry2);
			while(rst.next()){
				df.addRow(new Object[]{
				rst.getString("codeprod"),rst.getString("nomprod"),rst.getString("prix")		
						
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
		FgestionProd fg=new FgestionProd();
		fg.setVisible(true);
		
	}
	@Override
	public void actionPerformed(ActionEvent p) {
		// TODO Auto-generated method stub
		//insertion
		if(p.getSource()==bt2){
			String a,b,c;
			a=jc1.getSelectedItem().toString();
			b=jc2.getSelectedItem().toString();
			c=jf4.getText();
			String qr="insert into produit values('"+a+"','"+b+"','"+c+"') ";
			try{
				st=cn.connecion().createStatement();
				if(JOptionPane.showConfirmDialog(this,"voulez-vous ajoutez un produit?",null,JOptionPane.OK_CANCEL_OPTION)==JOptionPane.OK_OPTION){
					st.executeUpdate(qr);
					JOptionPane.showMessageDialog(this,"insertion éffectuée!");
				}
			}
			catch(SQLException ex){
				JOptionPane.showMessageDialog(this,"impossible d'insérer!");
		}
			dispose();
			FgestionProd fges=new FgestionProd();
			fges.setVisible(true);
		
	}
		//suppression
		if(p.getSource()==bt3){
			String a,b,c;
			a=jc1.getSelectedItem().toString();
			
			String qr="delete from produit where codeprod='"+a+"' ";
			try{
				st=cn.connecion().createStatement();
				if(JOptionPane.showConfirmDialog(this,"voulez-vous supprimer un produit?",null,JOptionPane.OK_CANCEL_OPTION)==JOptionPane.OK_OPTION){
					st.executeUpdate(qr);
					JOptionPane.showMessageDialog(this,"Suppression éffectuée!");
				}
			}
			catch(SQLException ex){
				JOptionPane.showMessageDialog(this,"Suppression impossible!");
		}
			dispose();
			FgestionProd fges=new FgestionProd();
			fges.setVisible(true);
		
	}
	//modification
		if(p.getSource()==bt4){
			String a,b,c;
			a=jc1.getSelectedItem().toString();
			b=jc2.getSelectedItem().toString();
			c=jf4.getText();
			String qr="update produit set nomprod='"+b+"',prix='"+c+"' where codeprod='"+a+"'";
			try{
				st=cn.connecion().createStatement();
				if(JOptionPane.showConfirmDialog(this,"voulez-vous modifier un produit?",null,JOptionPane.OK_CANCEL_OPTION)==JOptionPane.OK_OPTION){
					st.executeUpdate(qr);
					JOptionPane.showMessageDialog(this,"modification éffectuée!");
				}
			}
			catch(SQLException ex){
				JOptionPane.showMessageDialog(this,"impossible de modifier!");
		}
			dispose();
			FgestionProd fges=new FgestionProd();
			fges.setVisible(true);
		
	}
		//recherche
		if(p.getSource()==bt1){
			String a;
			a=jf5.getText();
			
			String qr="select * from produit where codeprod='"+a+"' ";
			try{
				st=cn.connecion().createStatement();
				rst=st.executeQuery(qr);
				if(rst.next()){
				 jc1.setSelectedItem(rst.getString("codeprod"));
				 jc2.setSelectedItem(rst.getString("nomprod"));
				 jf4.setText(rst.getString("prix"));
					
				}
				else
					JOptionPane.showMessageDialog(this,"codeproduit introuvable!",null,JOptionPane.ERROR_MESSAGE);
				
			}
			catch(SQLException ex){
				
		}
			
		
	}
		//bt5 mvmt
				if(p.getSource()==bt5){
					dispose();
					FgestionMouv fg=new FgestionMouv();
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
