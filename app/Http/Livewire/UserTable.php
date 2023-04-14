<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UserTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Email verified at", "email_verified_at")
                ->sortable(),
            Column::make("Two factor confirmed at", "two_factor_confirmed_at")
                ->sortable(),
            Column::make("Current team id", "current_team_id")
                ->sortable(),
            Column::make("Profile photo path", "profile_photo_path")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make("Identification", "identification")
                ->sortable(),
            Column::make("Identificationcard", "identificationcard")
                ->sortable(),
            Column::make("Nit", "nit")
                ->sortable(),
            Column::make("Firstname", "firstname")
                ->sortable(),
            Column::make("Secondname", "secondname")
                ->sortable(),
            Column::make("Lastname", "lastname")
                ->sortable(),
            Column::make("Motherslastname", "motherslastname")
                ->sortable(),
            Column::make("Birthdate", "birthdate")
                ->sortable(),
            Column::make("Age", "age")
                ->sortable(),
            Column::make("Type sex", "type_sex")
                ->sortable(),
            Column::make("Country", "country")
                ->sortable(),
            Column::make("Department", "Department")
                ->sortable(),
            Column::make("City", "city")
                ->sortable(),
            Column::make("Address", "address")
                ->sortable(),
            Column::make("Phone", "phone")
                ->sortable(),
            Column::make("Phone cellular", "phone_cellular")
                ->sortable(),
            Column::make("Eps", "eps")
                ->sortable(),
            Column::make("Eps status", "eps_status")
                ->sortable(),
            Column::make("Date eps", "date_eps")
                ->sortable(),
            Column::make("Blood type", "blood_type")
                ->sortable(),
            Column::make("Pension", "pension")
                ->sortable(),
            Column::make("Pension status", "pension_status")
                ->sortable(),
            Column::make("Date pension", "date_pension")
                ->sortable(),
            Column::make("Layoffs", "layoffs")
                ->sortable(),
            Column::make("Status layoffs", "status_layoffs")
                ->sortable(),
            Column::make("Date layoffs", "date_layoffs")
                ->sortable(),
            Column::make("Arl", "arl")
                ->sortable(),
            Column::make("Arl status", "arl_status")
                ->sortable(),
            Column::make("Arl date", "arl_date")
                ->sortable(),
            Column::make("Compensationbox", "compensationbox")
                ->sortable(),
            Column::make("Compensationbox status", "compensationbox_status")
                ->sortable(),
            Column::make("Date compensationbox", "date_compensationbox")
                ->sortable(),
            Column::make("User state", "user_state")
                ->sortable(),
            Column::make("User entry date", "user_entry_date")
                ->sortable(),
            Column::make("Date withdrawal user", "date_withdrawal_user")
                ->sortable(),
            Column::make("Charge", "charge")
                ->sortable(),
            Column::make("Usertype", "usertype")
                ->sortable(),
            Column::make("Civil status", "civil_status")
                ->sortable(),
            Column::make("Family document type", "family_document_type")
                ->sortable(),
            Column::make("Family names", "family_names")
                ->sortable(),
            Column::make("Relationship", "relationship")
                ->sortable(),
            Column::make("Family address", "family_address")
                ->sortable(),
            Column::make("Family phone", "family_phone")
                ->sortable(),
            Column::make("Family phone cellular", "family_phone_cellular")
                ->sortable(),
            Column::make("City birth", "city_birth")
                ->sortable(),
            Column::make("Place expedition identificationcard", "place_expedition_identificationcard")
                ->sortable(),
            Column::make("Identificationcard family", "identificationcard_family")
                ->sortable(),
            Column::make("Bonding type", "bonding_type")
                ->sortable(),
            Column::make("Weight", "weight")
                ->sortable(),
            Column::make("Pant size", "pant_size")
                ->sortable(),
            Column::make("Shirt size", "shirt_size")
                ->sortable(),
            Column::make("Shoe size", "shoe_size")
                ->sortable(),
            Column::make("Education level", "education_level")
                ->sortable(),
            Column::make("Educational institution", "educational_institution")
                ->sortable(),
            Column::make("Last year", "last_year")
                ->sortable(),
            Column::make("Study end date", "study_end_date")
                ->sortable(),
            Column::make("Obtained title", "obtained_title")
                ->sortable(),
            Column::make("Last company name", "last_company_name")
                ->sortable(),
            Column::make("Charges last company", "charges_last_company")
                ->sortable(),
            Column::make("Start date last company", "start_date_last_company")
                ->sortable(),
            Column::make("Date end last company", "date_end_last_company")
                ->sortable(),
            Column::make("Functions performed", "functions_performed")
                ->sortable(),
            Column::make("Supplier name", "supplier_name")
                ->sortable(),
            Column::make("Company name provider", "company_name_provider")
                ->sortable(),
            Column::make("Commercial reason supplier", "commercial_reason_supplier")
                ->sortable(),
            Column::make("Supplier web page", "supplier_web_page")
                ->sortable(),
            Column::make("Supplier category", "supplier_category")
                ->sortable(),
            Column::make("Economic activity", "economic_activity")
                ->sortable(),
            Column::make("Products and services", "products_and_services")
                ->sortable(),
            Column::make("Supplier description", "supplier_description")
                ->sortable(),
            Column::make("Salary", "salary")
                ->sortable(),
            Column::make("Aid transport", "aid_transport")
                ->sortable(),
            Column::make("Work area", "work_area")
                ->sortable(),
            Column::make("Username ", "username ")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
